<?php

// Hier ist der  einstieg punkt unsere App

// Fehlermeldugen aktiviren
error_reporting(error_level:E_ALL);
ini_set(option:'display_errors', value:'1');

// Autoloading
require_once __DIR__ . '/../vendor/autoload.php';

// Fast-Route-Library

// Dispatcher einrichten
$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', 'App\Controller\HomeController::index');
    $r->addRoute('GET', '/jobangebote', 'App\Controller\JobangeboteController::index');
    $r->addRoute('GET', '/bewerbung', 'App\Controller\BewerbungController::index');
});

// HTTP-Methode und URI abrufen
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Unnoetige URL-Teile entfernen
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

// Routing abgleichen

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '... 404 Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        echo '405 Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        // Route gefunden, Handler ausfueren
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        list($class, $method) = explode('::', $handler, 2);
        call_user_func_array([new $class, $method], $vars);
        break;
        default:
        echo 'An unexpected routing error occurred';  // Default error handling
        break;

        if (class_exists($class)) {
            if (method_exists($class, $method)) {
                call_user_func_array([new $class, $method], $vars);
            } else {
                echo "Method $method does not exist in class $class<br>";
            }
        } else {
            echo "Class $class does not exist<br>";
        }
        break;
}
//$controller = new App\Controller\JobangeboteController();
//$controller->index();


echo 'ich bin index public';

