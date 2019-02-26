<?php
require 'environment.php';

define("BASE_URL", "http://localhost/gestao_php/");

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'erp';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'erp';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
?>
