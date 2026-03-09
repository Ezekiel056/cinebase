<?php

declare(strict_types=1);

namespace App\Controllers;

abstract class Controller
{
    protected function render(string $view, array $data = []): void
    {
        extract($data); // Recupere les variables passés au renderer et les exposes.

        $viewPath = dirname(__DIR__) . "/Views/{$view}.php"; // recupere le chemin du fichier php correspondant a la vue demandée

        //le fichier existe bien ?
        if (!file_exists($viewPath)) {
            throw new \RuntimeException("Vue introuvable : {$view}");
        }

        require dirname(__DIR__) . '/Views/layout.php';
    }
}
