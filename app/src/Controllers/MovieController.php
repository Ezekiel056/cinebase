<?php

namespace App\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{

    public function home()
    {
        $moviesModele = new Movie;
        $moviesCount = $moviesModele->countMovies();

        $lastMovies = $moviesModele->getLastMovies(6);
        $this->render("home", compact('moviesCount', 'lastMovies'));
    }
}
