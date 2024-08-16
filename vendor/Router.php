<?php

class Router
{
    private static array $routes = [];

    public static function get($uri, $action): void
    {
        self::$routes['GET'][$uri] = $action;
    }

    public static function post($uri, $action): void
    {
        self::$routes['POST'][$uri] = $action;
    }

    public static function dispatch($uri, $method): void
    {
        foreach (self::$routes[$method] as $route => $action) {
            $pattern = preg_replace('/\{[a-zA-Z]+\}/', '([a-zA-Z0-9_-]+)', $route);
            if (preg_match("#^$pattern$#", $uri, $matches)) {
                array_shift($matches);
                [$controller, $method] = $action;
                $controller = new $controller;
                $controller->$method(...$matches);
                return;
            }
        }

        echo "404 Not Found";
    }
}
