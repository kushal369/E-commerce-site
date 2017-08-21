<?php 

session_start();



define('ROOT_PATH', $path);

define('ROOT_URL', 'http://localhost:81/php_3_pm/ecommerce');

// app path
define('APP_PATH', ROOT_PATH . '/app');
// system path
define('SYS_PATH', ROOT_PATH . '/system');
// system helper path
define('SYS_HLP_PATH', SYS_PATH . '/helpers');
// echo SYS_HLP_PATH;
// app controller path
define('AC_PATH', APP_PATH . '/controllers');

// app view path
define('VIEW_PATH', APP_PATH . '/views');

define('MOD_PATH', APP_PATH . '/models');

define('UNIQUEID', '4hlrjisoddru03u4j3ow');
