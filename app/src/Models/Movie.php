<?php

namespace App\Models;


class Movie extends Model
{


    public function getMovies()
    {
        $stmt = $this->mysql->query('SELECT * FROM Movies ORDER BY Title ASC');
        $movies = $stmt->fetchAll();
        var_dump(count($movies));
    }
}
