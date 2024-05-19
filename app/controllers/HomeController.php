<?php
namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // Exemplo de como usar o Twig para renderizar uma view
        $template = $this->twig->load('home/index.twig');
        echo $template->render([
            'title' => 'Página Inicial'
        ]);
    }
}
