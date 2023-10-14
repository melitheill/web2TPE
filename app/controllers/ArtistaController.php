<?php
 
 
 require_once 'app/models/ArtistaModel.php';
 require_once 'app/views/AstistaView.php';

 class ArtistaController{
     private $model;
     private $view;

     public function __construct() {
        $this-> model = new ArtistaModel();
        $this -> view = new AstistaView ();
     }

     public function showArtistas (){
        $artista = $this -> model -> getArtistas();
        $this-> view-> showAstistas($artista);
     }

     
 }




