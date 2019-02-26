<?php
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
}
