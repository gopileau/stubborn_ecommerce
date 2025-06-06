<?php

namespace ContainerTLpLxGV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityControllerresetPasswordService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.OLhm2sr.App\Controller\SecurityController::resetPassword()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OLhm2sr.App\\Controller\\SecurityController::resetPassword()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'passwordHasher' => ['privates', '.errored.DWZe5e8', NULL, 'Cannot determine controller argument for "App\\Controller\\SecurityController::resetPassword()": the $passwordHasher argument is type-hinted with the non-existent class or interface: "Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordHasherInterface".'],
        ], [
            'userRepository' => 'App\\Repository\\UserRepository',
            'entityManager' => '?',
            'passwordHasher' => '?',
        ]))->withContext('App\\Controller\\SecurityController::resetPassword()', $container);
    }
}
