<?php
<<<<<<< HEAD
   
 require_once 'app/views/HomeView.php';

 class HomeController{
     
     private $view;

     public function __construct() {
       
        $this -> view = new HomeView();
     }

     public function showHome (){
       $this-> view->showHome();
     }

     
 }
=======
 require 'app/views/HomeView.php';
 class HomeController {
      private $view;

      public function showHome (){
         require'templates/home.phtml';
      }
 }
>>>>>>> 9a8cc31407e99984fa662e8f8c98d5047b64d656
