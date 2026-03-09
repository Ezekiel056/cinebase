<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css?v=<?= time() ?>">
    <link rel="stylesheet" href="./styles/layout.css?v=<?= time() ?>">
    <?php if ($css) : ?>
        <link rel="stylesheet" href="./styles/<?= $css ?>.css?v=<?= time() ?>">
    <?php endif ?>

    <script src="https://kit.fontawesome.com/616adc9fde.js" crossorigin="anonymous"></script>
    <title>Cine-base</title>
</head>

<body>
    <?php require $viewPath; ?>
</body>

</html>