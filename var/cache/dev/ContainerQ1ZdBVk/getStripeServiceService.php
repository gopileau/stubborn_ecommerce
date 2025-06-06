<?php

namespace ContainerQ1ZdBVk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStripeServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\StripeService' shared autowired service.
     *
     * @return \App\Service\StripeService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'StripeService.php';

        return $container->privates['App\\Service\\StripeService'] = new \App\Service\StripeService(($container->privates['parameter_bag'] ??= new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container)));
    }
}
