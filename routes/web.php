<?php
require_once 'vendor/Router.php';
require_once "Controllers/ProductController.php";

Router::get('/product', [ProductController::class, 'index']);

function route($url, $method): void
{
    Router::dispatch($url, $method);
}
