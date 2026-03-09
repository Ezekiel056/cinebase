<div class="home-container">

    <h2>A l'affiche</h2>
    <div class="featured-films">
        <?php foreach (array_slice($movies, 0, 3) as $movie): ?>
            <div class="film-card large">

                <div class="film-card-poster">
                    <img
                        src="<?= htmlspecialchars($movie['poster_url']) ?>"
                        alt="<?= htmlspecialchars($movie['title']) ?>"
                        class="poster">

                </div>
                <div class="film-title">
                    <h3><?= htmlspecialchars($movie['title']) ?></h3>
                </div>


            </div>
        <?php endforeach ?>
    </div>
</div>