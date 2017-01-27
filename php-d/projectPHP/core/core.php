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

define('PHPMAILER_HOST','p3plcpnl0173.prod.phx3.secureserver.net');
define('PHPMAILER_USER','public@ocrend.com');
define('PHPMAILER_PASS','Prinick2016');
define('PHPMAILER_PORT','465');
require('vendor/autoload.php');
require('core/models/class.Conexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/Users.php');
require('core/bin/functions/EmailTemplate.php');
$users=Users();
 ?>