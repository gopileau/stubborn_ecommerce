<?php

namespace ContainerQ5LJzJv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomeControllershowService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.GwIh.sb.App\Controller\HomeController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GwIh.sb.App\\Controller\\HomeController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'product' => ['privates', '.errored..service_locator.GwIh.sb.App\\Entity\\Product', NULL, 'Cannot autowire service ".service_locator.GwIh.sb": it references class "App\\Entity\\Product" but no such service exists.'],
        ], [
            'product' => 'App\\Entity\\Product',
        ]))->withContext('App\\Controller\\HomeController::show()', $container);
    }
}
