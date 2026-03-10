<?php

namespace App\Models;


class Movie extends Model
{


    // Compte le nombre de films présents dans la base
    public function countMovies(): int
    {
        $stmt = $this->mysql->query('SELECT count(*) as nbFilms FROM Movies');
        $data = $stmt->fetch();
        return $data ? $data['nbFilms'] : 0;
    }

    // Récupère tous les films
    public function getMovies(): array
    {
        $stmt = $this->mysql->query('SELECT * FROM Movies ORDER BY Title ASC');
        $movies = $stmt->fetchAll();
        return $movies;
    }


    // Récupère un film par son ID
    public function getMovieById(int $id): bool|array
    {
        if ($id > 0) {

            $stmt = $this->mysql->prepare('SELECT * FROM Movies WHERE id=:id');
            $stmt->execute(['id' => $id]);
            $movies = $stmt->fetch();
            return $movies;
        }

        return false;
    }


    // Recupere les n derniers films ajoutés
    public function getLastMovies(int $number): array
    {
        $stmt = $this->mysql->prepare('SELECT * FROM Movies ORDER BY id DESC limit :number');
        $stmt->execute(['number' => $number]);
        $movies = $stmt->fetchAll();
        return $movies;
    }
}
