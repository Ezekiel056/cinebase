<section class="add-movie-container">
    <button class="back-to-movies" type="button" onclick="history.back()">
        <i class=" fa-solid fa-arrow-left"></i>
        Retour à la fiche du film
    </button>
    <form action="/films/add" method="POST">

        <div class="form-group">
            <label for="poster-url">Url de l'affiche</label>
            <input type="text" id="poster-url" name="poster_url" value="<?= $movie['poster_url'] ?>">
            <div class="poster-popup hidden">
                <img src="" alt="">
            </div>
        </div>

        <div class="form-group">
            <label for="movie-title">Titre</label>
            <input type="text" id="movie-title" name="title" value="<?= $movie['title'] ?>">
        </div>
        <div class="form-group">
            <label for="movie-genre">genre</label>
            <select name="genre" id="movie-genre">
                <?php foreach ($genres as $genre): ?>
                    <option value="<?= $genre['id'] ?>" name="movie-genre"><?= $genre['name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group">
            <label for="movie-director">Realisteur</label>
            <input type="text" id="movie-director" name="director" value="<?= $movie['director'] ?>">
        </div>

        <div class="form-group">
            <label for="movie-year">Année de sortie</label>
            <input type="text" id="movie-year" name="year" value="<?= $movie['year'] ?>">
        </div>
        <div class="form-group">
            <label for="movie-duration">Durée du film (en minutes)</label>
            <input type="text" id="movie-duration" name="duration" value="<?= $movie['duration'] ?>">
        </div>

        <div class="form-group">
            <label for="movie-synopsis">Synopsis</label>
            <textarea type="text" id="movie-synopsis" name="synopsis"><?= $movie['synopsis'] ?></textarea>
        </div>

        <button class="valid-form-button" type="submit">Valider</button>
    </form>
</section>