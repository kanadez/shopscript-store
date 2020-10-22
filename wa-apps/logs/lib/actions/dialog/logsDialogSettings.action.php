<?php

class logsDialogSettingsAction extends waViewAction
{
    public function execute()
    {
        if (!$this->getRights('change_settings')) {
            return;
        }

        $php_log_setting = logsPhpLogging::getSetting();

        if (logsPhpLogging::configExists(true)
        && !$php_log_setting) {
            logsPhpLogging::setSetting(false);
        }

        $csm = new waContactSettingsModel();
        $large_logs_notify_setting = $csm->getOne(wa()->getUser()->getId(), 'logs', 'large_logs_notify');

        waLocale::loadByDomain('installer');
        waSystem::pushActivePlugin(null, 'installer');
        $debug_mode_setting = _wd('installer', 'Developer mode');
        waSystem::popActivePlugin();

        $end_time = $php_log_setting && wa_is_int($php_log_setting) ? date('H:i', $php_log_setting + 3600) : null;

        $controls = array(
            array(
                'title'        => _w('Enable PHP error log'),
                'name'         => 'php_log',
                'control_type' => waHtmlControl::CHECKBOX,
                'value'        => 1,
                'checked'      => $php_log_setting,
                'description'  => _w('PHP error messages will be saved to file <tt>wa-log/<b>php.log</b></tt>.')
                    .(logsHelper::inCloud() ?
                        '<br><br>'
                        .'<span class="bold black">'
                        .($end_time ?
                            sprintf(
                                _w('PHP errors will be logged during 1 hour only (until %s), to prevent large error logs from occupying server disk space.'),
                                $end_time
                            )
                                :
                            _w('PHP errors will be logged during 1 hour only, to prevent large error logs from occupying server disk space.')
                        )

                        .' '
                        ._w('Re-enable logging after this time expires, if necessary.')
                        .'</span> '
                            :
                        (!waSystemConfig::isDebug() ?
                            '<br><br>'
                            .'<span class="bold black">'
                            .($end_time ?
                                sprintf(
                                    _w('PHP errors will be logged during 1 hour only (until %s), to prevent large error logs from occupying server disk space.'),
                                    $end_time
                                )
                                    :
                                _w('PHP errors will be logged during 1 hour only, to prevent large error logs from occupying server disk space.')
                            )
                            .' '
                            ._w('Re-enable logging after this time expires, if necessary.')
                            .'<br>'
                            .sprintf(
                                _w('This limitation will not be applied if you enable "%s" setting in <a href="%s" target="_blank">Installer</a>.'),
                                $debug_mode_setting,
                                wa()->getAppUrl('installer').'?module=settings'
                            )
                            .'</span>'
                                :
                            '<br><br>'
                            .'<span class="bold black">'
                            .sprintf(
                                _w('PHP errors will be logged without limitations, because "%s" setting is enabled in <a href="%s" target="_blank">Installer</a>.'),
                                $debug_mode_setting,
                                wa()->getAppUrl('installer').'?module=settings'
                            )
                            .' '
                            .sprintf(
                                _w('To make PHP errors logged only during 1 hour, disable "%s".'),
                                $debug_mode_setting
                            )
                            .'</span>'
                        )
                        .'<br><br>'
                        .'<b>'._w('Enable this setting if you cannot, or do not want to, edit files on your server.').'</b>'
                        .'<br>'
                        .sprintf(_w('Otherwise add the following lines to your file <tt class>%s</tt>:'), wa()->getConfig()->getRootPath().'/<b>.htaccess</b>')
                        .'<br><br>'
                        .'<tt>php_flag display_errors Off<br>
                            php_value error_reporting 2147483647<br>
                            php_flag log_errors On<br>
                            php_value error_log ./wa-log/php.log</tt>'
                    )
            ),
            array(
                'title'        => _w('Notify me on large logs size'),
                'name'         => 'large_logs_notify',
                'control_type' => waHtmlControl::CHECKBOX,
                'value'        => 1,
                'checked'      => strlen($large_logs_notify_setting) ? (bool) (int) $large_logs_notify_setting : true,    //enabled by default
                'description'  => sprintf(
                    _w('Show indicator %s next to app icon in main menu when total logs size exceed 1 GB.'),
                    sprintf(
                        '<span class="indicator red" style="top: 0;">%s</span>',
                        _w('1GB+')
                    )
                ),
            ),
        );

        foreach ($controls as &$control) {
            $control += array(
                'namespace'           => 'settings',
                'control_wrapper'     => '<div class="field"><div class="name">%s</div><div class="value">%s<br>%s<br><br></div></div>',
                'title_wrapper'       => '%s',
                'description_wrapper' => '<span class="hint">%s</span>',
            );
            $control = waHtmlControl::getControl($control['control_type'], $control['name'], $control);
        }
        unset($control);

        $this->view->assign('controls', $controls);
    }
}
