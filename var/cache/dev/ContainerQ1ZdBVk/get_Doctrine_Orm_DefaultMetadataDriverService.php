<?php

namespace ContainerQ1ZdBVk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Doctrine_Orm_DefaultMetadataDriverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.doctrine.orm.default_metadata_driver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'MappingDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'MappingDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'MappingDriverChain.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'ColocatedMappingDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'ReflectionBasedDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'AttributeDriver.php';

        $a = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $b = ($container->privates['doctrine.orm.default_attribute_metadata_driver'] ??= new \Doctrine\ORM\Mapping\Driver\AttributeDriver([(\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Entity'), (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository')], true));

        $a->addDriver($b, 'App\\Entity');
        $a->addDriver($b, 'App\\Repository');

        return $container->privates['.doctrine.orm.default_metadata_driver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver($a, ($container->privates['.service_locator.BxSdgVt'] ?? $container->load('get_ServiceLocator_BxSdgVtService')));
    }
}
