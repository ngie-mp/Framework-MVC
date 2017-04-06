<?php

class Controller{
  var $vars = array();

  function render($filename, $d = array()) {
    $this->vars = array_merge($this->vars,$d);
    extract($this->vars);
    require(ROOT.'Views/'.$filename.'.php');
  }
}
