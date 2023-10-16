<?php

 class AuthView {

    
     public function showLogin (){
        require_once 'templates/formLogin.phtml';
     }

     public function showEror() {
        require_once 'templates/errorIngreso.phtml';
     }

 }