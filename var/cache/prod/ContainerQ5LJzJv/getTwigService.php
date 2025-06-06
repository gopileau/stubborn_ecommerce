<?php

namespace ContainerQ5LJzJv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwigService extends App_KernelProdContainer
{
    /*
     * Gets the private 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['twig'] = $instance = new \Twig\Environment(($container->privates['twig.loader.native_filesystem'] ?? $container->load('getTwig_Loader_NativeFilesystemService')), ['cache' => ($container->targetDir.''.'/twig'), 'charset' => 'UTF-8', 'debug' => false, 'strict_variables' => false, 'autoescape' => 'name']);

        $instance->addExtension(($container->privates['twig.extension.security_csrf'] ??= new \Symfony\Bridge\Twig\Extension\CsrfExtension()));
        $instance->addExtension(($container->privates['twig.extension.logout_url'] ?? $container->load('getTwig_Extension_LogoutUrlService')));
        $instance->addExtension(($container->privates['twig.extension.security'] ?? $container->load('getTwig_Extension_SecurityService')));
        $instance->addExtension(($container->privates['twig.extension.trans'] ??= new \Symfony\Bridge\Twig\Extension\TranslationExtension(NULL)));
        $instance->addExtension(($container->privates['twig.extension.assets'] ?? $container->load('getTwig_Extension_AssetsService')));
        $instance->addExtension(($container->privates['twig.extension.routing'] ?? $container->load('getTwig_Extension_RoutingService')));
        $instance->addExtension(($container->privates['twig.extension.yaml'] ??= new \Symfony\Bridge\Twig\Extension\YamlExtension()));
        $instance->addExtension(($container->privates['twig.extension.debug.stopwatch'] ?? $container->load('getTwig_Extension_Debug_StopwatchService')));
        $instance->addExtension(($container->privates['twig.extension.httpkernel'] ??= new \Symfony\Bridge\Twig\Extension\HttpKernelExtension()));
        $instance->addExtension(($container->privates['twig.extension.httpfoundation'] ?? $container->load('getTwig_Extension_HttpfoundationService')));
        $instance->addExtension(($container->privates['twig.extension.form'] ??= new \Symfony\Bridge\Twig\Extension\FormExtension(NULL)));
        $instance->addExtension(($container->privates['doctrine.twig.doctrine_extension'] ??= new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension()));
        $instance->addGlobal('app', ($container->privates['twig.app_variable'] ?? $container->load('getTwig_AppVariableService')));
        $instance->addRuntimeLoader(($container->privates['twig.runtime_loader'] ?? $container->load('getTwig_RuntimeLoaderService')));
        ($container->privates['twig.configurator.environment'] ?? $container->load('getTwig_Configurator_EnvironmentService'))->configure($instance);

        return $instance;
    }
}
