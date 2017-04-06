<?php
  class ContactController extends Controller
  {
      public function index()
      {
          $this->render('index', array('PageName' => "Contact page"));
      }
  }
