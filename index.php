<?php

define('WEBROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

//require_once ROOT .'vendor/autoload.php';

require(ROOT.'Core/Controllers/Controller.php');
require(ROOT.'Config/routes.php');
require(ROOT.'Core/Plugins/HtmlHelpers.php');

// $param = explode('/', $_GET['p']);
// $controller = $param[0];
// $action = $param[1];
// $get_params = (!empty($param[2])) ? $param[2] : "";

$url = explode('/', $_GET['p']);
$route = str_replace('/', '', $url[0]);
//$route = $url[0];

foreach ($routes as $key => $value) {
    if ($value['path'] == $route) {
        $controller = $value['controller'];
        $action = $value['action'];
        break;
    }else{
      $controller = 'index';
      $action = 'error404';
    }
}

$controllerFile = ucfirst($controller).'Controller.php';
$controllerClassName = ucfirst($controller).'Controller';
if (is_file('Controllers/'.$controllerFile)) {
    require('Controllers/'.$controllerFile);
} else {
    die("<div class='bloc_core_error'><div class='core_error'>Impossible de trouver le controller <strong>Controllers/".$controllerFile."</strong></div></div>");
}

$controller = new $controllerClassName();
if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    echo "Error 404";
}
