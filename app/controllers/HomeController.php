<?php
 require 'app/views/HomeView.php';
 class HomeController {
      private $view;

      public function showHome (){
         require'templates/home.phtml';
      }
 }