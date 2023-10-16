<?php
class CancionesView {

    public function showCanciones ($canciones){
        require 'templates/canciones.phtml';
    }

    public function showBusqueda (){
        require 'templates/busqueda.phtml';
    }
    

}