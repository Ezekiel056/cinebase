<?php

namespace App\Models;


class Movie extends Model
{


    public function getMovies(): array
    {
        $stmt = $this->mysql->query('SELECT * FROM Movies ORDER BY Title ASC');
        $movies = $stmt->fetchAll();
        return $movies;
    }


    public function getMovieById(int $id): bool|array
    {
        if ($id > 0) {

            $stmt = $this->mysql->prepare('SELECT * FROM Movies WHERE id=:id');
            $movies = $stmt->execute(['id' => $id]);
            return $movies;
        }

        return false;
    }

    protected function setTableName() {}
}
