<?php

class logsDialogSettingsSaveController extends waJsonController
{
    public function execute()
    {
        if ($this->getRights('change_settings')) {
            $settings = waRequest::post('settings', array(), waRequest::TYPE_ARRAY);

            //PHP logging
            $php_logging = ifset($settings['php_log'], false);
            if (strlen($error = logsPhpLogging::setSetting($php_logging))) {
                $this->errors[] = $error;
            }

            //personal notification on large logs size
            $csm = new waContactSettingsModel();
            $csm->set(wa()->getUser()->getId(), 'logs', 'large_logs_notify', (int) ifset($settings['large_logs_notify'], 0));
        }
    }
}
