<?php

namespace ContainerUuUdbCw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_TypedFieldMapper_DefaultService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.orm.typed_field_mapper.default' shared service.
     *
     * @return \Doctrine\ORM\Mapping\DefaultTypedFieldMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.orm.typed_field_mapper.default'] = new \Doctrine\ORM\Mapping\DefaultTypedFieldMapper();
    }
}
