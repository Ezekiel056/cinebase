<?php

namespace App\Models;


class Genre extends Model
{


    public function getGenres(): array
    {
        $stmt = $this->mysql->query('SELECT * FROM Genres ORDER BY Name ASC');
        $genres = $stmt->fetchAll();
        return $genres;
    }


    public function getGenreById(int $id): bool|array
    {
        if ($id > 0) {

            $stmt = $this->mysql->prepare('SELECT * FROM Genres WHERE id=:id');
            $genre = $stmt->execute(['id' => $id]);
            return $genre;
        }

        return false;
    }
}
