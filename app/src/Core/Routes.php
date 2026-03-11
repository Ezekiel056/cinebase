<?php

declare(strict_types=1);

use App\Controllers\MovieController;
use App\Controllers\UserController;

const ROUTES = [

    'GET' => [

        '/'                =>  [[MovieController::class, 'home'], false, 'main'],
        '/films'            =>  [[MovieController::class, 'movies'], false, 'main'],
        '/films/add'        =>  [[MovieController::class, 'add'], true, 'main'],
        '/films/edit/:id'   =>  [[MovieController::class, 'edit'], true, 'main'],
        '/films/:id'        =>  [[MovieController::class, 'movie'], false, 'main'],
        '/login'           =>  [[UserController::class,  'login'], false, 'default'],
        '/register'        =>  [[UserController::class,  'register'], false, 'default'],
        //   '/logout'       =>  [[UserController::class,  'logout'], true, 'default'],
    ],

    'POST' => [
        '/login'             =>  [[UserController::class,  'doLogin'], false, ''],
        '/register'          =>  [[UserController::class,  'doRegister'], false, ''],
        //    '/films/delete/:id'   =>  [[MovieController::class, 'deleteMovie'], true, ''],
        '/films/add'          =>  [[MovieController::class, 'insertMovie'], true, ''],
        '/films/edit'         =>  [[MovieController::class, 'updateMovie'], true, ''],

    ]


];
