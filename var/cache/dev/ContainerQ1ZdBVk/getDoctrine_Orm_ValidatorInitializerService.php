<?php

namespace ContainerQ1ZdBVk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_ValidatorInitializerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ObjectInitializerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'DoctrineInitializer.php';

        return $container->privates['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($container->services['doctrine'] ?? $container->load('getDoctrineService')));
    }
}
