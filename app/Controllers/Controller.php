<?php

namespace App\Controllers;

use Slim\Views\Twig;

abstract class Controller
{
    protected $view;

    public function __construct(Twig $view)
    {
        $this->view = $view;
    }
}