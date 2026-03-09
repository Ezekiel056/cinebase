<?php

declare(strict_types=1);

// Autoloader Composer — charge toutes nos classes + mongodb/mongodb automatiquement.
require_once dirname(__DIR__) . '/vendor/autoload.php';

// Chargement manuel du fichier .env.
// On n'utilise pas de lib supplémentaire pour rester léger.
$envFile = dirname(__DIR__, 2) . '/.env';


if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (str_starts_with(trim($line), '#')) {
            continue;
        }
        [$key, $value] = explode('=', $line, 2);
        $_ENV[trim($key)] = trim($value);
        putenv("{$key}={$value}");
    }
}

// Démarrage de la session PHP (pour les messages flash).
session_start();
