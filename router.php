<?php
 
require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/ArtistaController.php';
require_once 'app/controllers/CancionesController.php';
require_once 'app/controllers/AuthController.php';
require_once 'app/controllers/AlbumController.php';
require_once 'app/controllers/AbmController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'lista';
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
} else{
    $action = 'home'; 
}



$params = explode('/', $action);

//playlis
//listar   -->  showTasks
//agregar  -->  addTasks
//eliminar:ID  -->  removeTasks($id)
//guardar:ID  -->  saveTasks($id)

switch ($params[0]) {
    case 'home':
          $controller = new HomeController ();
          $controller -> showHome();
        break;
    case 'artistas':
            $controller = new ArtistaController ();
            $controller -> showArtistas();
        break;    
    case 'canciones':
            $controller = new CancionesController ();
            $controller -> showArtistas();
        break;
    case 'album':
          $controller = new AlbumController();
          $controller->showAlbum ();
        break;
    case'filtrar':
         $controller = new AlbumController();
         $controller->showByNombre();  
        break;    
    case 'login':
            $controller = new AuthController ();
            $controller -> showLogin();
        break;
    case 'autenticar':
            $controller = new AuthController();
            $controller -> autenticarUsuario();
        break;
    case 'logout':
            $controller = new AuthController ();
            $controller ->logout();
        break;

    case 'abm':
            $controller = new AbmController();
            $controller ->showFormCanciones(); 
        break;
    case 'agregar':
           $controller = new AbmController();
           $controller-> agregarCanciones();
        break;
    case 'delete':
            $controller = new AbmController();
            $controller-> deleteCancion();
         break;
    case 'modificar':
        $controller = new AbmController();
        $controller->modificarCancion();
        break;
         
    default:  
        echo'Eror 404';
        break;
}

