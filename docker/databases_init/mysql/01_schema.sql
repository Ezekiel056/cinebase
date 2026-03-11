DROP TABLE IF EXISTS Users;
DROP TABLE IF EXISTS movies;
DROP TABLE IF EXISTS genres;
DROP TABLE IF EXISTS movie_genres;


CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(320) NOT NULL,
    password VARCHAR(255) not null,
    username VARCHAR(50) not null,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    
    CONSTRAINT uq_users_email UNIQUE (email)
)CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;;

CREATE TABLE movies (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    director VARCHAR(100) NOT NULL,
    year INT NOT NULL,
    duration int NOT NULL,
    synopsis TEXT NOT NULL,
    poster_url varchar(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;;

CREATE TABLE genres (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL  
)CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

CREATE TABLE movie_genres (
    movie_id INT UNSIGNED,
    genre_id INT UNSIGNED,

    PRIMARY KEY (movie_id, genre_id),

    CONSTRAINT fk_movie_genres_movie_id
        FOREIGN KEY (movie_id)
        REFERENCES movies(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,

    CONSTRAINT fk_movie_genres_genre_id
        FOREIGN KEY (genre_id)
        REFERENCES genres(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
)CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;;

