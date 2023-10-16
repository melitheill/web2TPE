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

    public function showEror (){
        $this-> view -> showEror();
    }

    public function autenticarUsuario (){
        if(!empty($_POST['user'])&& !empty($_POST['password'])){
            $user=$_POST['user'];
            $password=$_POST['password'];

        $registro = $this->model->getUsuarios($user);
        if ($registro && password_verify ($password ,$registro->password)){
           // deberia ir al fomulario para cambiar las tablas de la base de datos
           echo 'correcto';
        } else{
            $this-> view-> showEror();

        }

         } else {
            $this->view->showLogin();
                 }
    }

      public function logout (){

      }
}