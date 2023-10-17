<?php

class AlbumView {
    
    public function showAlbum ($albums){
         require 'templates/album.phtml';
         
    }

    public function showAlbumByName ($canciones){
        require 'templates/canciones.phtml';
    }

}