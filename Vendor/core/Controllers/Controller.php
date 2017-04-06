<?php

class Controller{
  var $vars = array();

  function set($d){
    $this->vars = array_merge($this->vars,$d);
    /*foreach ($this->vars as $key => $value) {
      $_SESSION[$key] = $value;
    }*/
  }

  function render($filename){
    extract($this->vars);
    require(ROOT.'Views/'.$filename.'.php');
  }
}
