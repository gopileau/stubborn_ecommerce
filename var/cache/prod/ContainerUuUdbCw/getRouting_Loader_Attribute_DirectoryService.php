<?php

namespace ContainerUuUdbCw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_Loader_Attribute_DirectoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'routing.loader.attribute.directory' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\AttributeDirectoryLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['routing.loader.attribute.directory'] = new \Symfony\Component\Routing\Loader\AttributeDirectoryLoader(($container->privates['file_locator'] ??= new \Symfony\Component\HttpKernel\Config\FileLocator(($container->services['kernel'] ?? $container->get('kernel', 1)))), ($container->privates['routing.loader.attribute'] ??= new \Symfony\Bundle\FrameworkBundle\Routing\AttributeRouteControllerLoader('prod')));
    }
}
