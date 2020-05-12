<?php

namespace App\Controllers;

use Slim\Views\Twig;
use Doctrine\ORM\EntityManager;

abstract class Controller
{
    protected $view;
    protected $db;

    public function __construct(Twig $view, EntityManager $db)
    {
        $this->view = $view;
        $this->db = $db;
    }
}