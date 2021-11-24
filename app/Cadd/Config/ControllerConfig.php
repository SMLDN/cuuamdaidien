<?php

namespace Cadd\Config;

use Aura\Di\Container;
use Cadd\Controller\HomeController;
use Cadd\Controller\NoiCongController;
use Aura\Di\ContainerConfig as AuraContainerConfig;

class ControllerConfig extends AuraContainerConfig
{
    /**
     * @inheritDoc
     *
     * @param Container $container
     * @return void
     */
    public function define(Container $container): void
    {
        $container->set(HomeController::class, $container->lazyNew(HomeController::class));
        $container->set(NoiCongController::class, $container->lazyNew(NoiCongController::class));
    }

    /**
     * @inheritDoc
     *
     * @param Container $container
     * @return void
     */
    public function modify(Container $container): void
    {
    }
}