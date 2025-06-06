<?php

namespace ContainerQ1ZdBVk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_EventRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.event_registry' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\EventRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventRegistry.php';

        return $container->privates['maker.event_registry'] = new \Symfony\Bundle\MakerBundle\EventRegistry(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
    }
}
