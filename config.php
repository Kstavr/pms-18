<?php
$CONFIG = array (
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/owncloud/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/owncloud/custom',
      'url' => '/custom',
      'writable' => true,
    ),
  ),
  'trusted_domains' => 
  array (
    0 => 'localhost',
    1 => '192.168.1.21',
    3 => '*',
  ),
  'datadirectory' => '/mnt/data/files',
  'dbtype' => 'sqlite',
  'dbhost' => '',
  'dbname' => 'owncloud',
  'dbuser' => '',
  'dbpassword' => '',
  'dbtableprefix' => 'oc_',
  'log_type' => 'owncloud',
  'supportedDatabases' => 
  array (
    0 => 'sqlite',
    1 => 'mysql',
    2 => 'pgsql',
  ),
  'upgrade.disable-web' => true,
  'default_language' => 'en',
  'overwrite.cli.url' => 'http://localhost/',
  'htaccess.RewriteBase' => '/',
  'logfile' => '/mnt/data/files/owncloud.log',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'filelocking.enabled' => true,
  'passwordsalt' => 'wK+8lFo3xgdM58JnQv1hM6Zwa2mPLm',
  'secret' => 'Okvn0DYj3wlmCtNzD3xNvZMfAGOmG+zjOUW8EsJmSHUpXMGA',
  'version' => '10.14.0.3',
  'allow_user_to_change_mail_address' => '',
  'logtimezone' => 'UTC',
  'installed' => true,
  'instanceid' => 'oc9s7nije24o',
);
