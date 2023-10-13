<?php

class ArtistaModel{
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=web2-spotify;charset=utf8mb4', 'root', '');
    }

}