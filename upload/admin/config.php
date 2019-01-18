<?php
// HTTP
define('HTTP_SERVER', 'http://localhost:8080/electrozone/upload/admin/');
define('HTTP_CATALOG', 'http://localhost:8080/electrozone/upload/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost:8080/electrozone/upload/admin/');
define('HTTPS_CATALOG', 'http://localhost:8080/electrozone/upload/');

// DIR
define('DIR_APPLICATION', '/opt/lampp/htdocs/electrozone/upload/admin/');
define('DIR_SYSTEM', '/opt/lampp/htdocs/electrozone/upload/system/');
define('DIR_IMAGE', '/opt/lampp/htdocs/electrozone/upload/image/');
define('DIR_STORAGE', '/opt/lampp/htdocs/electrozone/storage/');
define('DIR_CATALOG', '/opt/lampp/htdocs/electrozone/upload/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
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
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'olshop');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
