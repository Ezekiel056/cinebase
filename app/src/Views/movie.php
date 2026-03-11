<?php

function formatDuration(int $minutes): string
{
    $hours = intdiv($minutes, 60);
    $mins  = $minutes % 60;

    return sprintf('%02dh %02dm', $hours, $mins);
}
?>
<div class="movie-container">
    <button class="back-to-movies" onclick="history.back()">
        <i class="fa-solid fa-arrow-left"></i>
        Retour à la liste des films
    </button>
    <div class="movie-poster-container">
        <img
            src="<?= htmlspecialchars($movie['poster_url']) ?>"
            alt="<?= htmlspecialchars($movie['title']) ?>"
            class="poster">
        <div class="movie-title-container">
            <h3><?= htmlspecialchars(strtoupper($movie['title'])) ?></h3>
        </div>


    </div>

    <div class="movie-infos">
        <p><?= strtoupper(htmlspecialchars($movie['director'])) ?> - <?= (($movie['year'])) ?></p>
        <p><?= (formatDuration($movie['duration'])) ?></p>
        <a href="/films/edit/<?= $movie['id'] ?>"><button type="button">Modifier la fiche du film</button></a>
        <hr>
        <p>
            <?= (htmlspecialchars($movie['synopsis'])) ?>
        </p>
    </div>


</div>