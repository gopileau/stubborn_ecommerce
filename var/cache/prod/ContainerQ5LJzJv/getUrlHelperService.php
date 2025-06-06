<?php

namespace ContainerQ5LJzJv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUrlHelperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'url_helper' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\UrlHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['url_helper'] = new \Symfony\Component\HttpFoundation\UrlHelper(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->services['router'] ?? self::getRouterService($container)));
    }
}
