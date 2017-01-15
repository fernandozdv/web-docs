<?php 
session_start();
/*Todo 7u7 */
define('HTML_DIR','html/');
define('APP_TITLE','ForoZZZ');
define('APP_DATE',date('Y',time()));
define('APP_URL','http://localhost/GITHUB/web-docs/php-d/projectPHP/');

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','foro');

require('vendor/autoload.php');
require('core/models/class.Conexion.php');
require('core/bin/functions/Encrypt.php');
 ?>