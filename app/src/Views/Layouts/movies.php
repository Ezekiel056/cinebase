<?php

use App\Core\Flash;
use App\Core\Session;

$flash = new Flash;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles.css?v=<?= time() ?>">
    <link rel="stylesheet" href="/styles/movies-layout.css?v=<?= time() ?>">
    <?php if ($css) : ?>
        <link rel="stylesheet" href="/styles/<?= $css ?>.css?v=<?= time() ?>">
    <?php endif ?>

    <script src="https://kit.fontawesome.com/616adc9fde.js" crossorigin="anonymous"></script>
    <?php if ($js) : ?>
        <script src="/scripts/<?= $js ?>.js?v=<?= time() ?>" defer></script>
    <?php endif ?>

    <title>$pageTitle</title>
</head>

<body>
    <header>
        <a href="/" title="Retour a l'accueil">
            <div class="site-logo-container">
                <i class="fa-regular fa-circle-play"></i>
                <h1>CinéBase</h1>
            </div>
        </a>

        <a href="<?= Session::isAuthenticated() ? "/logout" : "/login" ?>"><button class="add-movie"><?= Session::isAuthenticated() ? "Se deconnecter" : "Se connecter" ?></button></a>
    </header>
    <main>
        <?php require $viewPath; ?>
    </main>
    <footer>
       
    </footer>

    <?php $flash->handleFlashMessages() ?>
</body>

</html>