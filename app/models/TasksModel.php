<?php

class TasksModel{
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=web2-spotify;charset=utf8mb4', 'root', '');
    }

    public function getTasks (){
       $query = $this->db->prepare('SELECT * FROM artista INNER JOIN cancion AS cancion ON
       artista.idArtista =  cancion.idArtista INNER JOIN album AS album on album.idAlbum = cancion.idAlbum' ); 
       $query->execute();

       $canciones = $query->fetchAll(PDO::FETCH_OBJ);
       return $canciones;
    }

    public function insertTasks($titulo, $genero, $artista) {
        $query = $this->db->prepare('INSERT INTO cancion(nombreCancion,genero,artista) VALUES(?,?,?)');
        $query->execute([$titulo, $genero, $artista]);

        return $this->db->lastInsertId(); 

    }

    public function deleteTask($id){
        $query = $this->db->prepare ('DELETE FROM cancion WHERE id = ?');
        $query->execute ([$id]);
    }

    public function updateTask($id){
        $query = $this->db->prepare ('UPDATE cancion SET guradar = 1 WHERE id = ?');
        $query->execute ([$id]);
    }

}




