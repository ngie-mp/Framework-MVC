<?php

define('WEBROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

require(ROOT.'Vendor/core/Controllers/Controller.php');

$param = explode('/', $_GET['p']);
$controller = $param[0];
$action = $param[1];
$get_params = (!empty($param[2])) ? $param[2] : "";

$controllerFile = ucfirst($controller).'Controller.php';
$controllerClassName = ucfirst($controller).'Controller';
if(is_file('Controllers/'.$controllerFile)){
  require('Controllers/'.$controllerFile);
}else{
  die("<div class='bloc_core_error'><div class='core_error'>Impossible de trouver le controller <strong>Controllers/".$controllerFile."</strong></div></div>");
}

$controller = new $controllerClassName();
if(method_exists($controller, $action)){
  $controller->$action($get_params);
}else{
  echo "Error 404";
}
