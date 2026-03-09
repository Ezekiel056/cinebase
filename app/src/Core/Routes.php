<?php

declare(strict_types=1);

use App\Controllers\MovieController;
use App\Controllers\UserController;

const ROUTES = [

    'GET' => [

        '/'         =>  [[MovieController::class,       'home'],        true],
        '/login'    =>  [[UserController::class,        'login'],       false],
        '/register' =>  [[UserController::class,        'register'],    false],
        '/logout'   =>  [[UserController::class,        'register'],    true],
    ],

    'POST' => [
        // TODO : Add POST ROUTES ..
    ]

];
