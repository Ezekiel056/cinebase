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

    public function movie(int $id)
    {
        $moviesModele = new Movie;
        $movie = $moviesModele->getMovieById($id);
        if ($movie) {
            $this->render("movie", compact('movie'));
        } else {
            Session::setFlashMessage("error", ["Erreur lors de l'accès au film"]);
            $this->render("movies", compact('movies'));
        }
    }
}
