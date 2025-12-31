<?php
require_once __DIR__ . "/../autoload.php";
use App\Autoload;
use App\Controllers\HomeController;
use App\Controllers\LocationController;
use App\Controllers\ClientController;
Autoload::register();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = $_POST['controller'] ?? null;
    $action = $_POST['action'] ?? null;

if($controller === 'location' && $action ==='verification') {
    (new LocationController())->verification();
} 
}
$action = $_GET['action'] ?? 'home';
if($action === 'location') {
    (new LocationController())->index();
}

if($_SERVER['REQUEST_METHOD'] ==='POST'){
    $controller = $_POST['controller'] ?? null;
    $action = $_POST['action'] ?? null;
    if($controller === 'client' && $action === 'verification'){
        (new ClientController())->verification();
    }
     if($controller === 'location' && $action === 'enrigistrer'){
        (new LocationController())->enrigistrer();
    }
    // Traitement des données du formulaire de location
}

// var_dump($_POST);
// var_dump($controller,$action); die();
// if('REQUEST_METHOD' === 'POST'){
//     $controller = $_POST['controller'] ?? null;
//     $action = $_POST['action'] ?? null;
   
// }

$requestUri = $_SERVER['REQUEST_URI'];
$scriptname = dirname($_SERVER['SCRIPT_NAME']);
$path = str_replace($scriptname, "", $requestUri);
$path = trim($path, "/");
$path = strtok($path, "?");
switch ($path) {
    case '':
    case 'home':
       require_once __DIR__ . "/../views/home/index.php";
        break;
    case 'client':
        require_once __DIR__ . "/../views/home/clients.php";
        break;
    case 'location':
        require_once __DIR__ . "/../views/home/clients.php";
        break;
   
}