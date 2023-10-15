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
    
    public function autenticarUsuario (){
        $user = $_POST['user'];
        $password = $_POST['password'];

        if (empty($user) || empty($password)) {
            echo 'esta vacio'; 
        } 
            
        
        
    }


}