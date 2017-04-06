<?php
  class IndexController extends Controller
  {
      public function index(){
        $this->set(array('tuto' => array('nom'=>'test')));
        $this->render('index');
      }

      public function hello_world(){
        $this->set(array('name' => (!empty($name)) ? $name : "World"));
        $this->render('hello');
      }
  }
