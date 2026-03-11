<?php

namespace App\Models;

use PDOException;

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

    public function getGenresByMovieId(int $id): array
    {
        $stmt = $this->mysql->prepare('SELECT genres.name, genres.id as genre_id FROM movie_genres INNER JOIN genres ON genres.id = movie_genres.genre_id WHERE movie_genres.movie_id = :movie_id ORDER BY Name ASC');
        $stmt->execute(['movie_id' => $id]);
        $genres = $stmt->fetchAll();
        return $genres;
    }

    public function addGenre(string $name): int
    {
        $name = trim($name);
        if ($name !== '') {
            $stmt = $this->mysql->prepare('INSERT INTO genres (name) VALUES (:name)');
            try {
                $stmt->execute([':name' => $name]);
                return $this->mysql->lastInsertId();
            } catch (PDOException $e) {
                if ($e->getCode() == 23000) {
                    // Doublon détecté
                    return 0;
                }
                throw $e;
            }
        }

        return 0;
    }

    public function addMovieGenre(int $idMovie, int $idGenre): bool
    {

        if ($idMovie > 0 && $idGenre > 0) {
            $stmt = $this->mysql->prepare('INSERT INTO movie_genres (movie_id,genre_id) VALUES (:movie_id, :genre_id)');
            try {
                $stmt->execute(
                    [
                        ':movie_id' => $idMovie,
                        ':genre_id' => $idGenre
                    ]
                );
                return true;
            } catch (PDOException $e) {
                if ($e->getCode() == 23000) {
                    // Doublon détecté
                    return false;
                }
                throw $e;
            }
        }

        return false;
    }
}
