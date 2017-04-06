<?php

class HtmlHelpers{

  public static function routeUrl($route_name){
    require(ROOT.'Config/routes.php');
    foreach ($routes as $key => $value) {
        if ($value['path'] == $route_name) {
            return '/'.$value['path'];
        }
    }
    return '/';
  }

}
