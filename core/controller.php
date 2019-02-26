<?php
<<<<<<< HEAD
// Houve remoção do public pois ela só deve ser utilizado caso tivesse criado alguma classe aqui
// Coloquei dentro da função os require junto com as variavéis pois estavam nos parametros 
//mas não estavam sendo utilizadas e que indicam as rotas analisando a sua lógica

function loadView($viewName, $viewData) 
{
    require 'views/' . $viewName . 'php';
    require 'views/' . $viewData . 'php';

}
function index()
{
    require 'views/' . $viewName . 'php';
}

function loadTamplate($viewName, $viewData = array())
{
    require 'views/template.php';
}

function loadViewInTemplate($viewName, $viewData = array())
{
    extract($viewData);
    require 'view/' . $viewName . 'php';
=======
class controller {

	protected $db;

	public function __construct() {
		global $config;
		$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
	}

	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {
		include 'views/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

>>>>>>> 8fdbedb6744e074dbb6e57209d6fb327482c36d2
}
