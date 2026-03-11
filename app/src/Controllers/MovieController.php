<?php

namespace App\Controllers;

use App\Models\Movie;
use App\Core\Session;

class MovieController extends Controller
{

    public function home()
    {
        $moviesModele = new Movie;
        $moviesCount = $moviesModele->countMovies();

        $lastMovies = $moviesModele->getLastMovies(6);
        $this->render("home", compact('moviesCount', 'lastMovies'));
    }

    public function movies()
    {
        $moviesModele = new Movie;
        $movies = $moviesModele->getMovies();
        $this->render("movies", compact('movies'));
    }

    public function movie(string $id)
    {
        $moviesModele = new Movie;
        $movie = $moviesModele->getMovieById((int) $id);
        if ($movie) {
            $this->render("movie", compact('movie'));
        } else {
            Session::setFlashMessage("error", ["Erreur lors de l'accès au film"]);
            $this->redirect("/films");
        }
    }

    public function edit(string $id)
    {
        $moviesModele = new Movie;
        $movie = $moviesModele->getMovieById((int) $id);
        $id = $movie['id'];
        if ($movie) {
            Session::resetFormData();
            Session::setFormData("title", $movie['title']);
            Session::setFormData("poster_url", $movie['poster_url']);
            Session::setFormData("director", $movie['director']);
            Session::setFormData("year", $movie['year']);
            Session::setFormData("synopsis", $movie['synopsis']);

            $this->render("edit-movie", compact('id'));
        } else {
            Session::setFlashMessage("error", ["Erreur lors de l'accès au film"]);
            $this->redirect("/films");
        }
    }
}
