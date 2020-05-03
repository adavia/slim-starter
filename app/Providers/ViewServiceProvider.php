<?php   

namespace App\Providers;

use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use Slim\Psr7\Factory\UriFactory;
use Slim\Interfaces\RouteParserInterface;
use League\Container\ServiceProvider\AbstractServiceProvider;

class ViewServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        Twig::class
    ];

    protected $routeParser;

    public function __construct(RouteParserInterface $routeParser)
    {
        $this->routeParser = $routeParser;
    }
    
    public function register()
    {   
        $container = $this->getContainer();

        $config = $container->get('config');
        
        $twig = Twig::create(base_path('resources/views'), [
            'cache' => $config->get('cache.views.path'),
            'debug' => $config->get('app.debug')
        ]);

        $twig->addExtension(
            new TwigExtension(
                $this->routeParser,
                (new UriFactory)->createFromGlobals($_SERVER),
            )
        );

        if ($config->get('app.debug')) {
            $twig->addExtension(new \Twig\Extension\DebugExtension);
        }

        $container->share(Twig::class, $twig);
    }
}