<div class="home-container">
    <div class="hero-section">
        <h2>Votre collection</h2>
        <p>Cinématographique</p>
        <p class="hero-">Gérez et explorez votre bibliothèque de films avec élégance</p>
        <button class="large">Afficher les <?= $moviesCount ?> films</button>
    </div>



    <section class="apercu-collection">
        <hr>
        <h2>Les derniers films ajoutés</h2>

        <ul class="movies-list">
            <?php foreach ($lastMovies as $movie): ?>
                <li class="movie-item">
                    <h3><?= htmlspecialchars(strtoupper($movie['title'])) ?> - <?= htmlspecialchars($movie['year']) ?> - <?= htmlspecialchars($movie['director']) ?></h3>
                    <div class="movie-poster-container">
                        <img
                            src="<?= htmlspecialchars($movie['poster_url']) ?>"
                            alt="<?= htmlspecialchars($movie['title']) ?>"
                            class="poster">
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </section>
</div>