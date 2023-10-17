<?php
class CancionesView {

    public function showCanciones ($canciones,$genero = null){
        require 'templates/canciones.phtml';
        require 'templates/genero.phtml';
    }

    public function showByGenero (){
        require 'templates/genero.phtml';
    }

}