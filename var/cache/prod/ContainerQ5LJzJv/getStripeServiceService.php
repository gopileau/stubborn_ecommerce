<?php

namespace ContainerQ5LJzJv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStripeServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Service\StripeService' shared autowired service.
     *
     * @return \App\Service\StripeService
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Service\\StripeService'] = new \App\Service\StripeService(($container->privates['parameter_bag'] ??= new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container)));
    }
}
