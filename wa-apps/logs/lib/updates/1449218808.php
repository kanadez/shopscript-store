<?php

$old_config = <<<PHP
@ ini_set('display_errors', 0);
@ ini_set('error_reporting', E_ALL);
@ ini_set('log_errors', 1);
@ ini_set('error_log', './wa-log/php.log');
PHP;

$pattern = '/'.implode('\s+', array_map('wa_make_pattern', preg_split('/\s+/', $old_config))).'/';
$system_config_path = wa()->getConfig()->getPath('config').'/SystemConfig.class.php';
$system_config_contents = file_get_contents($system_config_path);

if (preg_match($pattern, $system_config_contents, $matches)) {
    waFiles::write($system_config_path, str_replace($matches[0], '', $system_config_contents));
}
