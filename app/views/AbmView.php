<?php

 class AbmView {
    
    public function formularioCancion ($albums){
        require_once'templates/agregarCancion.phtml';
    }

    public function eliminarCancion($canciones) {
        require_once 'templates/eliminarCancion.phtml';
    }
    
    public function modificarCancion($canciones){
        require_once 'templates/modificarCancion.phtml';
    }

 }
