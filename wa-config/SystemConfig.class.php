<?php

require_once dirname(__FILE__).'/../wa-system/autoload/waAutoload.class.php';
waAutoload::register();
waAutoload::getInstance()->add(array(
    'customException' => 'wa-system/vendors/custom/customException.class.php'
));

class SystemConfig extends waSystemConfig
{

}
