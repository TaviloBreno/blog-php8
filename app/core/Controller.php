<?php
// Arquivo: core/Controller.php

namespace App\Core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Controller
{
    protected $twig;

    public function __construct()
    {
        // Configuração do Twig
        $loader = new FilesystemLoader(__DIR__ . '/../views');
        $this->twig = new Environment($loader, [
            //'cache' => false, // Desabilitar o cache para ambiente de desenvolvimento
        ]);
    }
}
