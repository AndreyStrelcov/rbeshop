<?php
// HTTP
define('HTTP_SERVER', 'http://eshop/');

// HTTPS
define('HTTPS_SERVER', 'http://eshop/');

// DIR
define('DIR_APPLICATION', '/var/www/eshop/catalog/');
define('DIR_SYSTEM', '/var/www/eshop/system/');
define('DIR_IMAGE', '/var/www/eshop/image/');
define('DIR_STORAGE', '/var/www/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'andrew');
define('DB_PASSWORD', 'password1');
define('DB_DATABASE', 'eshop');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');