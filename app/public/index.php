<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;


// On instancie le routeur :
$router = new Router();

// On appelle la fonction dispatch pour gerer la route demandée.
$router->dispatch();
