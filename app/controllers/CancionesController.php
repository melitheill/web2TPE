 <?php

require_once 'app/views/CancionesView.php';
require_once 'app/models/CancionesModel.php';


  class CancionesController {
   
        private $model;
        private $view;
   
        public function __construct() {
           $this-> model = new CancionesModel ();
           $this -> view = new CancionesView;
        }
   
        public function showArtistas (){
           $canciones = $this -> model -> getCanciones();
           $this-> view-> showCanciones($canciones);
        }
   
        
    
  }