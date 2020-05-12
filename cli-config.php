<?php 

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once base_path('config/env.php');

require_once base_path('bootstrap/container.php');

return ConsoleRunner::createHelperSet($container->get(EntityManager::class));