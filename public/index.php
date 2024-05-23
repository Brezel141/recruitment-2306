<?php
require_once '../vendor/autoload.php';

// Import the RouteCollector class from FastRoute
use FastRoute\RouteCollector;

// Set up the dispatcher with route definitions
$dispatcher = FastRoute\simpleDispatcher(function(RouteCollector $r) {
    // Define the home route
    $r->addRoute('GET', '/', function() {
        require '../src/View/home.php';
    });

    // Define routes for Jobangebote (job offers)
    $r->addRoute('GET', '/jobangebote', 'App\Controller\JobangeboteController::index');
    $r->addRoute('GET', '/jobangebote/edit/{id:\d+}', 'App\Controller\JobangeboteController::edit');
    $r->addRoute('GET', '/jobangebote/show/{id:\d+}', 'App\Controller\JobangeboteController::show');
    $r->addRoute('POST', '/jobangebote/update/{id:\d+}', 'App\Controller\JobangeboteController::update');
    $r->addRoute('POST', '/jobangebote/delete/{id:\d+}', 'App\Controller\JobangeboteController::delete');

    //------------------------------
    $r->addRoute('GET', '/jobangebote/create', 'App\Controller\JobangeboteController::create');
    //--------------------------
    

    // Define routes for Bewerbung (applications)
    $r->addRoute('GET', '/bewerbung', 'App\Controller\BewerbungController::index');
    $r->addRoute('GET', '/bewerbung/edit/{id:\d+}', 'App\Controller\BewerbungController::edit');
    $r->addRoute('GET', '/bewerbung/show/{id:\d+}', 'App\Controller\BewerbungController::show');
    $r->addRoute('POST', '/bewerbung/update/{id:\d+}', 'App\Controller\BewerbungController::update');
    $r->addRoute('POST', '/bewerbung/delete/{id:\d+}', 'App\Controller\BewerbungController::delete');
});

// Get the HTTP method and URI from the server
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Decode the URI to handle special characters
$uri = rawurldecode(parse_url($uri, PHP_URL_PATH));

// Dispatch the request to the appropriate route
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // Handle 404 Not Found
        http_response_code(404);
        echo '404 Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        // Handle 405 Method Not Allowed
        http_response_code(405);
        echo '405 Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        // If the route is found, get the handler and variables
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        
        // Check if the handler is callable (e.g., a closure)
        if (is_callable($handler)) {
            call_user_func_array($handler, $vars);
        } else {
            // If the handler is a class method, call it
            list($class, $method) = explode('::', $handler);
            if (class_exists($class)) {
                if (method_exists($class, $method)) {
                    call_user_func_array([new $class, $method], $vars);
                } else {
                    echo "Method $method does not exist in class $class<br>";
                }
            } else {
                echo "Class $class does not exist<br>";
            }
        }
        break;
}

// Uncomment to test a specific controller directly
//$controller = new App\Controller\JobangeboteController();
//$controller->index();
?>
