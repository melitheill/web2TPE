<?php

 require_once 'app/views/AuthView.php';
    class AuthController {
       private $view;
    
    public function __construct()  {
        $this -> view = new AuthView ();
    }

    public function showLogin (){
        $this-> view -> showLogin();
    }

}