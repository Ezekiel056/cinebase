<?php


require_once dirname(__DIR__) . '/src/bootstrap.php';

use App\Core\Router;


// On instancie le routeur :
$router = new Router();

// On appelle la fonction dispatch pour gerer la route demandée.
$router->dispatch();
