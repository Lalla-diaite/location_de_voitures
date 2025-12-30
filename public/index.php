<?php
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
    default:
        http_response_code(404);
        echo "page not found";
        break;
}