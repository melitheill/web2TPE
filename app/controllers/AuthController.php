<?php

 require 'app/views/AuthView.php';
 require 'app/models/AuthModel.php';



    class AuthController {
       private $view;
       private $model;
      
    public function __construct()  {
        $this -> view = new AuthView ();
        $this-> model = new AuthModel;      
    }

    public function showLogin (){
        $this-> view -> showLogin();
    }


    public function autenticarUsuario (){
        if(!empty($_POST['user'])&& !empty($_POST['password'])){
            $user=$_POST['user'];
            $password=$_POST['password'];
            $registro = $this->model->getUsuarios($user);

        if ($registro && password_verify ($password ,$registro->password)){
            session_start();
            $_SESSION['USER_ID'] = $user->idUser;
            $_SESSION['USER_NAME'] = $user->user;

           header("LOCATION: " . BASE_URL . 'lista');

           
          } else { $this-> view-> showLogin('Usuario o Contraseña Incorrecta'); }

         } else {  $this->view->showLogin('Faltan completar alguno de los campos');
            return;}
         }

      public function logout (){
        session_start();
        session_destroy();
        header("LOCATION: " . BASE_URL . 'home');
      }
}