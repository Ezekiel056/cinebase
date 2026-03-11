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

    public function register()
    {
        $this->render("register");
    }

    public function logout()
    {
        Session::destroy();
        Session::setFlashMessage("success", ["Vous êtes deconnecté"]);
        $this->redirect("/");
    }


    // Gere la demande de connexion de l'utilisateur
    public function doLogin()
    {

        $errors = [];
        $email = $this->getPost("email", true, "");
        $password = $this->getPost("password", false, "");

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
            Session::setFlashMessage("success", ["Bonjour {$user['username']}"]);
            $this->redirect("/");
            $this->redirect("/"); // <-- OK connexion reussie, on passe au home.
        } else {
            Session::setFlashMessage("error", ["Accès refusé"]);
            $this->redirect("/login"); // <-- echec de connexion.. on reste sur le login
        }
    }


    // Gestion du formulaire de demande de creation de compte
    public function doRegister()
    {
        $errors = [];
        $email = trim($this->getPost("email", true, ""));
        $password = trim($this->getPost("password", false, ""));
        $repeatPassword = trim($this->getPost("repeat-password", false, ""));
        $userName = trim($this->getPost("username", true, ""));

        Session::resetFormData();
        Session::setFormData("email", $email);
        Session::setFormData("username", $userName);

        if (!$email) {
            $errors[] = "Veuillez renseigner votre email";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Format d'email incorrect.";
        }

        if (!$userName) {
            $errors[] = "Veuillez renseigner votre nom d'utilisateur";
        }

        if (!$password) {
            $errors[] = "Veuillez renseigner votre nom d'utilisateur";
        }

        if (!$repeatPassword) {
            $errors[] = "Veuillez comfirmer le mot de passe";
        }

        if ($password && $repeatPassword && $password !== $repeatPassword) {
            $errors[] = "Les mots de passes ne correspondent pas";
        }

        if ($errors) {
            Session::setFlashMessage("error", $errors);
            $this->redirect("/register"); // <- Echec , on reste sur register
        }

        $userModel = new User;
        if ($userModel->getUserByEmail($email)) {
            Session::setFlashMessage("error", ["Il y à déjà un compte associé à cet email."]);
            $this->redirect("/register"); // <- Echec , on reste sur register
        }


        if ($userModel->create([
            "email" => $email,
            "username" => $userName,
            "password" => $password,
        ])) {
            Session::setFlashMessage("success", ["Votre compte a bien été créé. Vous pouvez vous connecter."]);
            $this->redirect("/login"); // <- OK, on retour au login
        } else {
            Session::setFlashMessage("error", ["Erreur lors de la création du compte..."]);
            $this->redirect("/register"); // <- Echec , on reste sur register
        }
    }
}
