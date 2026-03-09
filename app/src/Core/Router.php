<?php

declare(strict_types=1);

namespace App\Core;


require __DIR__ . '/Routes.php';

final class Router
{
    private  array $routes = [];

    public function __construct() // Le constructeur va chercher les routes définie dans Routes.php
    {

        foreach (ROUTES as $method => $methodRoutes) {
            foreach ($methodRoutes as $path => $action) {

                $this->$method($path, $action);
            }
        }
    }



    private function get(string $path, array $action): void
    {
        $this->routes["GET {$path}"] = $action;
    }

    private function post(string $path, array $action): void
    {
        $this->routes["POST {$path}"] = $action;
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri    = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri    = rtrim($uri, '/') ?: '/';

        foreach ($this->routes as $route => $action) {
            [$routeMethod, $routePath] = explode(' ', $route, 2);

            if ($routeMethod !== $method) {
                continue;
            }


            $pattern = preg_replace('#:([a-zA-Z]+)#', '([^/]+)', $routePath);
            $pattern = "#^{$pattern}$#";

            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches);

                [$controllerClass, $methodName] = $action;
                $controller = new $controllerClass();
                $controller->$methodName(...$matches);
                return;
            }
        }

        http_response_code(404);
        echo '<h1>404 — Page introuvable</h1>';
    }
}
