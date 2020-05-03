<?php 

use League\Container\Container;
use League\Container\ReflectionContainer;
use Slim\Factory\AppFactory;

$container = new Container();

AppFactory::setContainer($container);

$app = AppFactory::create();

// Required to enable auto wiring.
$container->delegate(
    new ReflectionContainer
);

// Kick off providers
require_once base_path('bootstrap/providers.php');