<?php

namespace ContainerQ5LJzJv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssets_PackagesService extends App_KernelProdContainer
{
    /*
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['assets.packages'] = new \Symfony\Component\Asset\Packages(($container->privates['assets._default_package'] ?? $container->load('getAssets_DefaultPackageService')), new RewindableGenerator(fn () => new \EmptyIterator(), 0));
    }
}
