<?php
  class IndexController extends Controller
  {
      public function index(){
        $this->render('index', array('PageName' => "Home page"));
      }

      public function contact(){
        $this->render('contact', array('PageName' => "Contact page"));
      }
  }
