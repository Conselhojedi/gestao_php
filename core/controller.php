<?php
public function loadView($viewName,$viewData){
  public function index(){  
  require 'views/'.$viewName.'php';
  }
  public function loadTamplate($viewName,$viewData = array()){
    require 'views/template.php';
  }
  public function loadViewInTemplate($viewName,$viewData = array()){
    extract($viewData);
    require 'view/'.$viewName.'php';
  }
}


 ?>
