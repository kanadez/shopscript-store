<?php

wa('logs');
if (method_exists('logsPhpLogging', 'setSetting')) {
    logsPhpLogging::setSetting(false);
}
