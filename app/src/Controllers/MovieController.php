<?php

namespace App\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{

    public function home()
    {
        $moviesModele = new Movie;
        $movies = $moviesModele->getMovies("title");
        $this->render("home", compact('movies'));
    }
}
