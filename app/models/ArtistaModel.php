<?php

class ArtistaModel{
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=web2-spotify;charset=utf8mb4', 'root', '');
    }

    function getArtistas() {
        $query = $this->db->prepare('SELECT * FROM artista');
        $query->execute();
        $artistas = $query->fetchAll(PDO::FETCH_OBJ);
        return $artistas;
    }
   


    
}