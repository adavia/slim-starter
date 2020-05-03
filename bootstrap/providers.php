<?php   

use App\Providers\ViewServiceProvider;
use App\Providers\ConfigServiceProvider;
use App\Providers\DatabaseServiceProvider;

$container->addServiceProvider(
    new ConfigServiceProvider,
);

$container->addServiceProvider(
    new ViewServiceProvider(
        $app->getRouteCollector()->getRouteParser()
    )
);

$container->addServiceProvider(
    new DatabaseServiceProvider,
);