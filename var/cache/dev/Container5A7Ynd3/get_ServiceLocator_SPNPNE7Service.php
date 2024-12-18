<?php

namespace Container5A7Ynd3;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SPNPNE7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sPNPNE7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sPNPNE7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'security.event_dispatcher.dev' => ['privates', 'debug.security.event_dispatcher.dev', 'getDebug_Security_EventDispatcher_DevService', false],
            'security.event_dispatcher.main' => ['privates', 'debug.security.event_dispatcher.main', 'getDebug_Security_EventDispatcher_MainService', false],
        ], [
            'event_dispatcher' => '?',
            'security.event_dispatcher.dev' => '?',
            'security.event_dispatcher.main' => '?',
        ]);
    }
}
