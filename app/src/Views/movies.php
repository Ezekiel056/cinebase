<div class="movies-container">
    <div class="add-movie-btn">
        <p>Vous ne trouvez pas votre film ? ajoutez-le !</p>
        <a href="/films/add"><button class="large"> Ajouter un film</button></a>
    </div>
    <div class="search-container">
        <input type="text" placeholder="Recherchez un titre de film">
    </div>

    <section class="movies">
        <ul class="movies-list">
            <?php foreach ($movies as $movie): ?>
                <li class="movie-item">
                    <a href="/films/<?= $movie['id'] ?>">
                        <div class="movie-poster-container">
                            <img
                                src="<?= htmlspecialchars($movie['poster_url']) ?>"
                                alt="<?= htmlspecialchars($movie['title']) ?>"
                                class="poster">
                            <div class="movie-title-container">
                                <h3><?= htmlspecialchars(strtoupper($movie['title'])) ?> - <?= htmlspecialchars($movie['year']) ?> - <?= htmlspecialchars($movie['director']) ?></h3>
                            </div>
                        </div>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </section>
</div>