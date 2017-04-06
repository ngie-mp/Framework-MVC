<?php
  class IndexController extends Controller
  {
      public function index()
      {
          $this->render('index', array('PageName' => "Home page"));
      }

      public function error404(){
          $this->render('error404');
      }
  }
