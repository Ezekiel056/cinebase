<?php

namespace App\Controllers;


use App\Core\Session;
use App\Models\User;

class UserController extends Controller
{

    public function login()
    {
        $this->render("login");
    }

    public function doLogin()
    {

        $errors = [];
        $email = $this->getPost("email", "");
        $password = $this->getPost("password", "");

        Session::resetFormData();
        Session::setFormData("email", $email);
        Session::setFormData("password", $password);


        if (!$email) {
            $errors[] = "Veuillez renseigner votre email";
        }

        if (!$password) {
            $errors[] = "Veuillez renseigner votre mot de passe";
        }



        if ($errors) {
            Session::setFlashMessage("error", $errors);
            $this->redirect("/login");
        }

        $userModel = new User;
        $user = $userModel->getUserByEmail($email);
        if ($user && $userModel->checkPassword($password, $user['password'])) {
            Session::create($user);
            $this->redirect("/home");
        } else {
            Session::setFlashMessage("error", ["Accès refusé"]);
            $this->redirect("/login");
        }
    }
}
