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


    public function updateMovie($data): bool
    {
        $stmt = $this->mysql->prepare('UPDATE movies SET title=:title, director=:director, year=:year, duration=:duration, synopsis=:synopsis, poster_url=:poster_url WHERE id=:id');
        $stmt->bindValue('director', $data['director']);
        $stmt->bindValue('title', $data['title']);
        $stmt->bindValue('year', $data['year']);
        $stmt->bindValue('duration', $data['duration']);
        $stmt->bindValue('synopsis', $data['synopsis']);
        $stmt->bindValue('poster_url', $data['poster_url']);
        $stmt->bindValue('id', $data['id']);

        return $stmt->execute();
    }

    public function addMovie($data): int
    {
        $stmt = $this->mysql->prepare('INSERT INTO movies (title,director,year,duration,synopsis,poster_url) VALUES (:title,:director,:year, :duration, :synopsis, :poster_url )');
        $stmt->bindValue('director', $data['director']);
        $stmt->bindValue('title', $data['title']);
        $stmt->bindValue('year', $data['year']);
        $stmt->bindValue('duration', $data['duration']);
        $stmt->bindValue('synopsis', $data['synopsis']);
        $stmt->bindValue('poster_url', $data['poster_url']);

        if ($stmt->execute()) {
            return $this->mysql->lastInsertId();
        } else return 0;
    }

    public function deleteMovie(int $id): bool
    {
        if (is_numeric($id)) {
            $stmt = $this->mysql->prepare('DELETE FROM movies WHERE id=:id');
            return $stmt->execute(["id" => $id]);
        }
        return false;
    }
}
