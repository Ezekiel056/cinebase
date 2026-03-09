<?php

namespace App\Controllers;

use App\Models\Movie;

class HomeController extends Controller
{

    public function home()
    {
        $moviesModele = new Movie;
        $moviesModele->getMovies();
        $this->render("home");
    }
}
