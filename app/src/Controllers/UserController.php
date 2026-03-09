<?php

namespace App\Controllers;

use App\Models\Movie;

class UserController extends Controller
{

    public function login()
    {

        $this->render("login");
    }
}
