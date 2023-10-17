<?php
 require 'app/models/AlbumModel.php';
 require 'app/views/AlbumView.php';
 
 
 class AlbumController {
    private $model;
    private $view;

    public function __construct() {
       $this->model = new AlbumModel ();
       $this -> view = new AlbumView ();
    }

    public function showAlbum (){
       $album = $this -> model -> getAlbum() ;
       $this-> view-> showAlbum($album);
    }

    public function showByNombre (){
        $nombreAlbum = $_POST['album'];
        $canciones = $this->model->getByName($nombreAlbum);
        $this->view->showAlbumByName($canciones);

    }


 }