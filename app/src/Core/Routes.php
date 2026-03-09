<?php

declare(strict_types=1);

use App\Controllers\HomeController;

const ROUTES = [

    'GET' => [

        '/' => [HomeController::class, 'home'],
    ],

    'POST' => [
        // TODO : Add POST ROUTES ..
    ]

];
