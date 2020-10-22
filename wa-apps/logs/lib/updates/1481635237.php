<?php

$model = new waModel();
$model->exec('CREATE TABLE IF NOT EXISTS `logs_published` (
  `path` text NOT NULL,
  `hash` varchar(255) NOT NULL,
  UNIQUE KEY `hash` (`hash`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;');

waFiles::delete(wa('logs')->getAppPath('lib/actions/backend/logsBackendSettings.action.php'));
waFiles::delete(wa('logs')->getAppPath('lib/actions/backend/logsBackendSettingsSave.controller.php'));
waFiles::delete(wa('logs')->getAppPath('lib/actions/backend/logsBackendUpdatePublishedStatus.controller.php'));
waFiles::delete(wa('logs')->getAppPath('templates/actions/backend/BackendSettings.html'));
