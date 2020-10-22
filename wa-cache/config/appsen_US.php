<?php
return array (
  'contacts' => 
  array (
    'id' => 'contacts',
    'name' => 'Contacts',
    'icon' => 
    array (
      48 => 'wa-apps/contacts/img/contacts.png',
      96 => 'wa-apps/contacts/img/contacts96.png',
      24 => 'wa-apps/contacts/img/contacts.png',
      16 => 'wa-apps/contacts/img/contacts.png',
    ),
    'rights' => true,
    'analytics' => true,
    'version' => '1.1.6',
    'critical' => '1.1.0',
    'vendor' => 'webasyst',
    'system' => false,
    'csrf' => true,
    'plugins' => true,
    'frontend' => true,
    'routing_params' => 
    array (
      'private' => true,
    ),
    'build' => 20,
    'img' => 'wa-apps/contacts/img/contacts.png',
  ),
  'installer' => 
  array (
    'id' => 'installer',
    'name' => 'Installer',
    'description' => 'Install new apps from the Webasyst Store',
    'icon' => 
    array (
      48 => 'wa-apps/installer/img/installer.png',
      96 => 'wa-apps/installer/img/installer96.png',
      24 => 'wa-apps/installer/img/installer.png',
      16 => 'wa-apps/installer/img/installer.png',
    ),
    'mobile' => false,
    'version' => '1.8.8',
    'critical' => '1.8.8',
    'system' => true,
    'vendor' => 'webasyst',
    'csrf' => true,
    'build' => 236,
    'img' => 'wa-apps/installer/img/installer.png',
  ),
  'shop' => 
  array (
    'id' => 'shop',
    'name' => 'Store',
    'description' => 'Shop-Script is a robust shopping cart software that allows you to quickly establish your own online store and sell online.',
    'icon' => 
    array (
      16 => 'wa-apps/shop/img/shop16.png',
      24 => 'wa-apps/shop/img/shop24.png',
      48 => 'wa-apps/shop/img/shop.png',
      96 => 'wa-apps/shop/img/shop96.png',
    ),
    'sash_color' => '#27bf52',
    'rights' => true,
    'frontend' => true,
    'auth' => true,
    'themes' => true,
    'plugins' => true,
    'pages' => true,
    'mobile' => true,
    'my_account' => true,
    'version' => '7.4.5',
    'critical' => '7.0.0',
    'vendor' => 'webasyst',
    'csrf' => true,
    'payment_plugins' => 
    array (
      'taxes' => true,
    ),
    'shipping_plugins' => 
    array (
      'desired_date' => true,
      'draft' => true,
      'ready' => true,
      'cancel' => true,
      'taxes' => true,
      'custom_fields' => true,
    ),
    'sms_plugins' => true,
    'license' => 'commercial',
    'build' => 243,
    'img' => 'wa-apps/shop/img/shop.png',
  ),
  'site' => 
  array (
    'id' => 'site',
    'name' => 'Site',
    'icon' => 
    array (
      96 => 'wa-apps/site/img/site96.png',
      48 => 'wa-apps/site/img/site.png',
      24 => 'wa-apps/site/img/site24.png',
      16 => 'wa-apps/site/img/site16.png',
    ),
    'sash_color' => '#49a2e0',
    'frontend' => true,
    'version' => '2.3.3',
    'critical' => '2.3.1',
    'vendor' => 'webasyst',
    'system' => true,
    'rights' => true,
    'plugins' => true,
    'themes' => true,
    'pages' => true,
    'auth' => true,
    'csrf' => true,
    'my_account' => true,
    'build' => 75,
    'img' => 'wa-apps/site/img/site.png',
  ),
  'team' => 
  array (
    'id' => 'team',
    'name' => 'Team',
    'icon' => 
    array (
      24 => 'wa-apps/team/img/team24.png',
      48 => 'wa-apps/team/img/team48.png',
      96 => 'wa-apps/team/img/team96.png',
      16 => 'wa-apps/team/img/team24.png',
    ),
    'version' => '1.0.6',
    'vendor' => 'webasyst',
    'sash_color' => '#f0dc03',
    'system' => true,
    'rights' => true,
    'plugins' => true,
    'csrf' => true,
    'build' => 86,
    'img' => 'wa-apps/team/img/team48.png',
  ),
  'logs' => 
  array (
    'id' => 'logs',
    'name' => 'Logs',
    'icon' => 
    array (
      16 => 'wa-apps/logs/img/logs16.png',
      24 => 'wa-apps/logs/img/logs24.png',
      48 => 'wa-apps/logs/img/logs48.png',
      96 => 'wa-apps/logs/img/logs96.png',
    ),
    'version' => '0.9.4',
    'rights' => 1,
    'vendor' => 817747,
    'sash_color' => '#558FCE',
    'frontend' => true,
    'routing_params' => 
    array (
      'private' => true,
    ),
    'build' => 1537458752,
    'img' => 'wa-apps/logs/img/logs48.png',
  ),
  'webasyst' => 
  array (
    'id' => 'webasyst',
    'name' => 'Webasyst',
    'prefix' => 'webasyst',
    'version' => '1.8.8',
    'critical' => '1.8.8',
    'vendor' => 'webasyst',
    'csrf' => true,
    'build' => 236,
    'icon' => 
    array (
    ),
  ),
);
