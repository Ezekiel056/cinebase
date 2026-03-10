<?php

declare(strict_types=1);

namespace App\Controllers;

require dirname(__DIR__) . '/core/Layouts.php';
abstract class Controller
{
    protected string $layout;

    protected function render(string $view, array $data = []): void
    {
        extract($data); // Recupere les variables passés au renderer et les exposes.

        $viewPath = dirname(__DIR__) . "/Views/{$view}.php"; // recupere le chemin du fichier php correspondant a la vue demandée
        $css = file_exists(dirname(__DIR__, 2) . "/public/styles/{$view}.css") ? $view : "";


        //le fichier existe bien ?
        if (!file_exists($viewPath)) {
            throw new \RuntimeException("Vue introuvable : {$view}");
        }

        require dirname(__DIR__) . '/Views/Layouts/' . LAYOUTS[$this->layout] . '.php';
    }

    public function setLayout(string $layout)
    {
        $this->layout = $layout;
    }
}
