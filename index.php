<?php


use App\Controllers\CategorieController;
use App\Controllers\EpreuvesController;
use App\Controllers\HomeController;
use App\Controllers\ParticipantController;
use App\Models\DataBase;
use Symfony\Component\HttpFoundation\Request;

// charger mes class
require __DIR__.'/vendor/autoload.php';

//echo 'hello';

// httpfoundation
$request = Request::createFromGlobals();
//dump($request);

// base de données
$object = new DataBase;
$object->getPdo();



// MON ROUTER
$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/Home', [new HomeController(), 'TwigTest']);
    //$r->addRoute('GET', '/Epreuve/{lieu}/{date}', [new EpreuvesController(), 'AddEpreuve']);
    $r->addRoute('GET', '/Epreuve', [new EpreuvesController(), 'addEpreuve']);
    $r->addRoute('POST', 'Epreuve', [new EpreuvesController(), 'add']);
    $r->addRoute('GET', '/Participant', [new ParticipantController(), 'addParticipant']);
    //$r->addRoute('POST', '/Participant', [new ParticipantController(), 'fetchParticipant']);
    $r->addRoute('POST', '/Participant', [new ParticipantController(), 'add']);
    $r->addRoute('GET', '/Categorie', [new CategorieController(), 'addCategorie']);
    // {id} must be a number (\d+)
    //$r->addRoute('GET', '/user/{id:\d+}', 'get_user_handler');

    // The /{title} suffix is optional
    //$r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
});


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
        $response = call_user_func_array($handler, [$request]);
        $response->send();
        break;
}
