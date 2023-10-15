<?php

 class AuthModel  extends ArtistaModel{
    private $db;


    public function __construct() {
        $this ->db ->conectar ();
     }

     public function getUsuarios($user) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE user ?');
        $query->execute([$user]);
        return $query->fetch(PDO::FETCH_OBJ);
        
    }

 }