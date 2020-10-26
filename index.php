<?php


use App\Controllers\EpreuvesController;
use App\Controllers\HomeController;

use Symfony\Component\HttpFoundation\Request;

// charger mes class
require __DIR__.'/vendor/autoload.php';

//echo 'hello';

// httpfoundation
$request = Request::createFromGlobals();
//dump($request);

//
try {
    $db = new PDO('mysql:host=localhost;dbname=logitud', 'root', 'root');
} catch (PDOException $e) {
    echo $e->getMessage();
}
//


// MON ROUTER
$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/Home', [new HomeController(), 'TwigTest']);
    $r->addRoute('GET', '/Epreuve/{lieu}/{date}', [new EpreuvesController(), 'AddEpreuve']);
    $r->addRoute('GET', '/Epreuve', [new EpreuvesController(), 'AddEpreuve']);
    // {id} must be a number (\d+)
    //$r->addRoute('GET', '/user/{id:\d+}', 'get_user_handler');

    // The /{title} suffix is optional
    //$r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
});

/*// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];


// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);*/

$routeInfo = $dispatcher->dispatch($request->getMethod(), $request->getPathInfo());
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        echo 'La page n\'est pas trouvée';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        echo 'La méthode n\'existe pas';
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        // ... call $handler with $vars
        $request->query->add($routeInfo[2]);
        call_user_func_array($handler, [$request]);
        break;
}

// TWIG
/*
$loader = new \Twig\Loader\ArrayLoader([
    'index' => 'Bonjour {{ name }}!',
]);
$twig = new \Twig\Environment($loader);*/



/*$loader = new Twig_Loader_Filesystem(__DIR__. '/src/Views/templates');
$twig = new Twig_Environment($loader, [
    'cache' => __DIR__. '/src/templates/cache'
]);*/