<?php

class logsPhpLogging
{
    const PHP_LOGGING_SECONDS = 3600;

    /**
     * return bool|int Whether logging is enabled (positive int: old timestamp for time-dependent logging, or true) or not enabled (false)
     */
    public static function getSetting()
    {
        $system_config_contents = file_get_contents(self::getSystemConfigPath());
        if (preg_match(self::getPhpLogConfigRegexp(true), $system_config_contents, $matches)) {
            $old_timestamp = $matches[1];
            return time() - intval($old_timestamp) <= self::PHP_LOGGING_SECONDS ? $old_timestamp : false;
        } else {
            return (bool) preg_match(self::getPhpLogConfigRegexp(false), $system_config_contents);
        }
    }

    public static function setSetting($enable)
    {
        $system_config_path = self::getSystemConfigPath();
        if (is_writable($system_config_path)) {
            $old_contents = file_get_contents($system_config_path);

            //find and remove existing logging config
            if (preg_match(self::getPhpLogConfigRegexp(true), $old_contents)) {
                //first try to delete time-dependent config
                $new_contents = preg_replace(self::getPhpLogConfigRegexp(true), "\n", $old_contents);
            } elseif (preg_match(self::getPhpLogConfigRegexp(false), $old_contents)) {
                //if not found, try to delete simple config
                $new_contents = preg_replace(self::getPhpLogConfigRegexp(false), "\n", $old_contents);
            } else {
                $new_contents = $old_contents;
            }

            if ($enable) {
                //if necessary, add logging config to clean file
                $new_contents .= "\n".(
                    logsHelper::inCloud() || !waSystemConfig::isDebug() ?
                        sprintf(self::getPhpLogConfig(true), time(), self::PHP_LOGGING_SECONDS)
                            :
                        self::getPhpLogConfig(false)
                    )."\n";
            }

            //re-write the file and update app settings, if config contents changed
            if ($new_contents != $old_contents) {
                waFiles::write($system_config_path, $new_contents);

                //save setting to be used in onCount() to check whether time-dependent setting is expired
                $asm = new waAppSettingsModel();
                if (preg_match(self::getPhpLogConfigRegexp(true), $new_contents)) {
                    $asm->set('logs', 'php_log_with_time_limit', 1);
                } else {
                    $asm->del('logs', 'php_log_with_time_limit');
                }
            }
        } else {
            return sprintf(_w('Cannot save changes due to insufficient write permissions for file <tt>%s</tt>.'), $system_config_path);
        }
    }

    public static function configExists($with_time)
    {
        return preg_match(self::getPhpLogConfigRegexp($with_time), file_get_contents(self::getSystemConfigPath()));
    }

    private static function getPhpLogConfig($with_time)
    {
        static $php_logging_strings = array(
            "@ ini_set('display_errors', 0);",
            "@ ini_set('error_reporting', E_ALL);",
            "@ ini_set('log_errors', 1);",
            "@ ini_set('error_log', './wa-log/php.log');",
        );
        static $configs = array();
        $key = (int) $with_time;
        if (!isset($configs[$key])) {
            $configs[$key] = $with_time ? "if (time() - %d <= %d) {\n".'    '.implode("\n    ", $php_logging_strings)."\n}" : implode("\n", $php_logging_strings);
        }
        return $configs[$key];
    }

    private static function getSystemConfigPath()
    {
        return wa()->getConfig()->getPath('config').'/SystemConfig.class.php';
    }

    private static function getPhpLogConfigRegexp($with_time)
    {
        return '/\s*'.str_replace('%d', '(\d+)', implode('\s+', array_map('wa_make_pattern', preg_split('/\s+/', self::getPhpLogConfig($with_time))))).'\s*/';
    }
}
