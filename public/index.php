<?php
// Arquivo: public/index.php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

$router = new Router();

// Exemplo de rota GET para a página inicial
$router->addRoute('GET', '/', 'HomeController@index');

// Exemplo de rota POST para login
$router->addRoute('POST', '/login', 'AuthController@login');

// Outras rotas...

// Captura o método e URI da requisição
$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Manipula a requisição
$router->handleRequest($method, $uri);
