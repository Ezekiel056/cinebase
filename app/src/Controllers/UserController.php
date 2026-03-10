<?php

namespace App\Controllers;

use App\Models\Movie;

class UserController extends Controller
{

    public function login()
    {
        $this->render("login",);
    }

    public function doLogin()
    {
        $email = $this->getPost("email");
        $password = $this->getPost("password");

        if (!$email) {
        }
    }
}
