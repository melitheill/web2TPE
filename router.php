<?php
 
require './app/controllers/HomeControler.php'; 
require './app/controllers/ArtistaController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
} else{
    $action = 'home'; 
}

$params = explode('/', $action);



switch ($params[0]) {
    case 'home':
        $controller = new HomeController ();
        $controller -> showHome();
        break;
    case 'artistas':
            $controller = new ArtistaController ();
            $controller -> showArtistas();
            break;
    
    default:  
        
        break;
}

