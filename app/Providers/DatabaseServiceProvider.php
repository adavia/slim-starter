<?php

namespace App\Providers;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use League\Container\ServiceProvider\AbstractServiceProvider;

class DatabaseServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        EntityManager::class
    ];

    public function register()
    {
        $container = $this->getContainer();

        $config = $container->get('config');

        $container->share(EntityManager::class, function () use ($config) {
            $setup = Setup::createAnnotationMetadataConfiguration(
                [base_path('app')],
                true, // dev mode
                null, // proxy dir
                null, // cache
                false, // use simple annotation reader
            );

            return EntityManager::create($config->get('db'), $setup);
        });
    }
}
