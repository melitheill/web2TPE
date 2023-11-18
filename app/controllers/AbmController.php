<?php

 require_once 'app/models/AbmModel.php';
 require_once 'app/views/AbmView.php';
 Class AbmController{
    private $view;
    private $model;
   

   public function __construct(){
      $this->view = new AbmView();
      $this->model = new AbmModel ();
   }
   
    
   public function showFormCanciones (){
    $albums= $this->model-> getAlbum(); 
    $this->view-> formularioCancion($albums);
    $canciones = $this->model-> getCanciones();
    $this->view->modificarCancion($canciones);
    $this-> view-> eliminarCancion($canciones);
   }

   public function agregarCanciones (){
      if(!empty($_POST['nombreCancion'])&& !empty($_POST['duracion']) 
         && !empty($_POST['genero'])  && !empty($_POST['anio'])  && !empty($_POST['album'])
         && !empty($_POST['artista'])  )    
         {
         $nombreCancion=$_POST['nombreCancion'];
         $duracion=$_POST['duracion'];
         $genero = $_POST['genero'];
         $anio = $_POST['anio'];
         $album = $_POST['album'];
         $artista = $_POST['artista'];

         $this->model->insertCanciones($nombreCancion,$duracion,$genero, $anio,$album,$artista);
      
      }   
    }
     
    public function deleteCancion(){
       if(!empty($_POST['cancion'])){
      $cancion = $_POST['cancion'];
      $this->model-> deleteCancion($cancion);
      header("LOCATION: " . BASE_URL . 'canciones'); }
      
    }

    public function modificarCancion(){
     if (!empty($_POST['idCancion'])){
      $idCancion = $_POST['idCancion'];
      $nombreCancion=$_POST['nombreCancion'];
      $duracion=$_POST['duracion'];
      $genero = $_POST['genero'];
      $anio = $_POST['anio'];
     $this->model->modificarCancion($nombreCancion,$duracion,$genero, $anio,$idCancion);
     header("LOCATION: " . BASE_URL . 'canciones');
     
     }
    }
       
   
 }