<?php 

require 'vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('DBHOST', $_ENV['DBHOST']);
define('DBUSER',  $_ENV['DBUSER']);
define('DBPASS',  $_ENV['DBPASS']);
define('BDNAME',  $_ENV['BDNAME']);
define('DBPORT',  $_ENV['DBPORT']);
define('KEY',  $_ENV['KEY']);


?>