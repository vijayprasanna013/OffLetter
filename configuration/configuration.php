<?php
// SITE_ROOT contains the full path to the project folder
define('SITE_ROOT', dirname(dirname(__FILE__)));

// Application directories
#define('BUSINESS_DIR', SITE_ROOT . '/business/');

// Database connectivity setup
define('DB_PERSISTENCY', 'true');
define('MAIN_DB_SERVER', 'localhost');

//Localhost configuration
// define('MAIN_DB_USERNAME', 'root');
// define('MAIN_DB_PASSWORD', '');
// define('MAIN_DB_DATABASE', '');
//print_r(SITE_ROOT);
// define('PDO_DSN', 'mysql:host=' . MAIN_DB_SERVER . ';dbname=' . MAIN_DB_DATABASE);

/* define('ASSET_URL','../Metronic/assets/');
define('ASSET_URL_8','../Metronic_v8.1.6/html/demo1/dist/'); */
$asset_url="../Metronic/m6/";
$asset_url_v8="../Metronic/m8/demo1/dist/";

?>