<?php

class logsConfig extends waAppConfig
{
    public function explainLogs($logs)
    {
        foreach ($logs as $id => $log) {
            if (in_array($log['action'], array('file_delete', 'file_publish', 'file_unpublish'))
            && strlen(ifset($log['params']))) {
                $logs[$id]['params_html'] = 'wa-log/'.$log['params'];
            }
        }
        return $logs;
    }

    public function onCount()
    {
        $asm = new waAppSettingsModel();

        if (!logsHelper::inCloud()
        && waSystemConfig::isDebug()
        && logsPhpLogging::getSetting()
        && logsPhpLogging::configExists(true)) {
            //not in Cloud
            //if PHP logging was enabled with disabled debug_mode (WITH time limit) and then debug_mode was enabled
            //change logging WITH time limit to logging WITHOUT time limit
            logsPhpLogging::setSetting(true);    //existing logging config is removed automatically when logging is being enabled
        } elseif (!logsHelper::inCloud()
        && !waSystemConfig::isDebug()
        && logsPhpLogging::getSetting()
        && !logsPhpLogging::configExists(true)) {
            //not in Cloud
            //if PHP logging was enabled with enabled debug_mode (WITH no time limit) and then debug_mode was disabled
            //change logging WITHOUT time limit to logging WITH time limit
            logsPhpLogging::setSetting(true);    //existing logging config is removed automatically when logging is being enabled
        } elseif ((int) $asm->get('logs', 'php_log_with_time_limit') == 1
        && logsPhpLogging::configExists(true)
        && !logsPhpLogging::getSetting()) {
            //disable expired logging WITH time limit
            //when in Cloud or if debug_mode is disabled
            logsPhpLogging::setSetting(false);
        }

        //notify user on large logs size
        $csm = new waContactSettingsModel();
        $large_logs_notify = $csm->getOne(wa()->getUser()->getId(), 'logs', 'large_logs_notify');
        $large_logs_notify = strlen($large_logs_notify) ? (bool) (int) $large_logs_notify : true;    //enabled by default
        if ($large_logs_notify) {
            $total_size = logsHelper::getTotalLogsSize();
            if (logsHelper::isLargeSize($total_size)) {
                return array(
                    'count' => _wd('logs', '1GB+'),
                    'url'   => wa()->getConfig()->getBackendUrl(true).'logs/?action=files&mode=size',
                );
            }
        }
    }
}
