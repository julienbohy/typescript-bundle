<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

/**
 * @link https://symfony.com/doc/current/bundles/best_practices.html#services
 */
return static function (ContainerConfigurator $container): void {
    $container
        ->parameters()
            // ->set('julienbohy_typescript.param_name', 'param_value');
    ;
    $services = $container->services()
        ->defaults()
            ->autowire()
            ->autoconfigure()
    ;

    $services->load('JulienBohy\\TypescriptBundle\\', '../src/')
        ->exclude('../src/{DependencyInjection,Entity,Tests,TypescriptBundle.php}');
};
