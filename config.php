<?php
require 'environment.php';
$config = array();
if (ENVIRONMENT == 'development') {
    $config['base_url'] = 'http://localhost/gestao_php/';
    $config['dbname'] = '';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    $config['base_url'] = 'http://meusite.com.br/';
    $config['dbname'] = '';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}
global $db;
try {
    $db = new PDO("mysql:dbname=" . $config['dbname'] . "host=" . $config['host'], $config['dbuser'], $config['dbpass'], $config['base__url']);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
    exit;
}
