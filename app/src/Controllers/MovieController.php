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

        if ($movie) {
            if (Session::isFormDataSet()) {
                unset($movie);
                $movie['id'] = $id;
                $movie['poster_url'] = Session::getFormData('poster_url');
                $movie['director'] = Session::getFormData('director');
                $movie['title'] = Session::getFormData('title');
                $movie['duration'] = Session::getFormData('duration');
                $movie['description'] = Session::getFormData('description');
                $movie['year'] = Session::getFormData('year');
                Session::resetFormData();
            }
            $this->render("edit-movie", compact('movie'));
        } else {
            Session::setFlashMessage("error", ["Erreur lors de l'accès au film"]);
            $this->redirect("/films");
        }
    }

    public function updateMovie()
    {
        $errors = [];
        $url = trim($this->getPost("poster_url", true, ""));
        $title = trim($this->getPost("title", true, ""));
        $director = trim($this->getPost("director", true, ""));
        $year = trim($this->getPost("year", false, ""));
        $duration = trim($this->getPost("duration", false, 0));
        $synopsis = trim($this->getPost("synopsis", true, ""));
        $id = trim($this->getPost("id", false, ""));

        Session::resetFormData();
        Session::setFormData("poster_url", $url);
        Session::setFormData("title", $title);
        Session::setFormData("director", $director);
        Session::setFormData("duration", $duration);
        Session::setFormData("year", $year);
        Session::setFormData("synopsis", $synopsis);

        if (!$id || !is_numeric($id)) {
            Session::setFlashMessage("error", ["Erreur lors de l'acces au film"]);
            $this->redirect("/films/edit/" . $id);
        }

        if (!$url) {
            $errors[] = "Veuillez indiquer l'url de l'affiche";
        }

        if (!$title) {
            $errors[] = "Veuillez renseigner le titre du film";
        }

        if (!$director) {
            $errors[] = "Veuillez renseigner le realisateur";
        }

        if (!$year || !is_numeric($year)) {
            $errors[] = "Veuillez indiquer l'année / année invalide";
        }

        if (!$synopsis) {
            $errors[] = "Veuillez renseigner le synopsis";
        }

        if (!$duration || !is_numeric($duration) || !($duration > 0)) {
            $errors[] = "Veuillez renseigner la durée du film / durée incorrecte";
        }



        if ($errors) {

            Session::setFlashMessage("error", $errors);
            $this->redirect("/films/edit/" . $id); // <- Echec , on reste sur edit
        }

        $movieModel = new Movie();

        $update = $movieModel->updateMovie([
            'id' => $id,
            'title' => $title,
            'director' => $director,
            'year' => $year,
            'duration' => $duration,
            'synopsis' => $synopsis,
            'poster_url' => $url
        ]);

        if ($update) {
            Session::resetFormData();
            Session::setFlashMessage("success", ["Film mis à jour avec succès"]);
            $this->redirect("/films/{$id}");
        } else {
            Session::setFlashMessage("error", ["Erreur lors de la mise à jour des données"]);
            $this->redirect("/films/edit/" . $id); // <- Echec , on reste sur edit
        }
    }
}
