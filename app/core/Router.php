<?php

namespace App\Core;

class Router
{
    protected $routes = [];

    public function addRoute($method, $path, $controller)
    {
        $this->routes[$method][$path] = $controller;
    }

    public function handleRequest($method, $uri)
    {
        if (isset($this->routes[$method][$uri])) {
            $controllerAction = $this->routes[$method][$uri];
            list($controllerName, $action) = explode('@', $controllerAction);

            $controllerName = "App\\Controllers\\$controllerName";
            $controller = new $controllerName();
            $controller->$action();
        } else {
            http_response_code(404);
            echo '404 Not Found';
        }
    }
}
