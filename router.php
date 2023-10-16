<?php
 
require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/ArtistaController.php';
require_once 'app/controllers/CancionesController.php';
require_once 'app/controllers/AuthController.php';

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
    
    case 'canciones':
            $controller = new CancionesController ();
            $controller -> showArtistas();
            break;

    case 'login':
            $controller = new AuthController;
            $controller -> showLogin();
            break;
    case 'autenticar':
            $controller = new AuthController;
            $controller -> autenticarUsuario();
            break;
    case 'logout':
                $controller = new AuthController;
                $controller ->logout();
                break;
        
    default:  
        echo'Eror 404';
        break;
}

