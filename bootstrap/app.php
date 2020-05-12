<?php 

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

require_once base_path('config/env.php');

require_once base_path('bootstrap/container.php');   

require_once base_path('routes/web.php');

// Dependency injection instead of autowiring (content goes after requiring container)
// $container->add(HomeController::class, function () use ($container) {
//     return new HomeController(
//         $container->get('view'),
//         $container->get('settings'),
//     );
// });


