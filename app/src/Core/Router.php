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
                [$action, $auth] = $action;
                $this->setRoute($method, $path, $action, $auth);
            }
        }
    }


    private function setRoute(string $method, string $path, array $action, bool $auth)
    {
        $this->routes["{$method} {$path}"] = [
            'action' => $action,
            'auth' => $auth
        ];
    }

    // private function get(string $path, array $action, bool $auth): void
    // {

    //     $this->routes["GET {$path}"] = [
    //         'action' => $action,
    //         'auth' => $auth
    //     ];
    // }

    // private function post(string $path, array $action, bool $auth): void
    // {
    //     $this->routes["POST {$path}"] = $action;
    // }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri    = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri    = rtrim($uri, '/') ?: '/';

        foreach ($this->routes as $route => $config) {

            [$routeMethod, $routePath] = explode(' ', $route, 2);

            if ($routeMethod !== $method) {
                continue;
            }

            $pattern = preg_replace('#:([a-zA-Z]+)#', '([^/]+)', $routePath);
            $pattern = "#^{$pattern}$#";

            if (preg_match($pattern, $uri, $matches)) {

                // Vérification auth
                if ($config['auth'] && !Session::isAuthenticated()) {

                    header('Location: /login');
                    exit;
                }

                array_shift($matches);

                [$controllerClass, $methodName] = $config['action'];

                $controller = new $controllerClass();
                $controller->$methodName(...$matches);

                return;
            }
        }

        http_response_code(404);
        echo '<h1>404 — Page introuvable</h1>';
    }
}
