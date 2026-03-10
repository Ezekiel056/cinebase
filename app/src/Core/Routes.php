<?php

declare(strict_types=1);

use App\Controllers\MovieController;
use App\Controllers\UserController;

const ROUTES = [

    'GET' => [

        '/'             =>  [[MovieController::class, 'home'], false, 'main'],
        '/films'         =>  [[MovieController::class, 'home'], false, 'main'],
        '/films/:id'     =>  [[MovieController::class, 'show'], false, 'main'],
        '/login'        =>  [[UserController::class,  'login'], false, 'default'],
        '/register'     =>  [[UserController::class,  'register'], false, 'default'],
        '/logout'       =>  [[UserController::class,  'logout'], true, 'default'],
        '/films/add'     =>  [[MovieController::class, 'add'], true, 'main'],
        '/films/edit'    =>  [[MovieController::class, 'edit'], true, 'main'],
    ],

    'POST' => [
        '/login'             =>  [[UserController::class,  'doLogin'], false, ''],
        '/register'          =>  [[UserController::class,  'doRegister'], false, ''],
        '/films/delete/:id'   =>  [[MovieController::class, 'deleteMovie'], true, ''],
        '/films/add'          =>  [[MovieController::class, 'insertMovie'], true, ''],
        '/films/edit'         =>  [[MovieController::class, 'updateMovie'], true, ''],

    ]


];
