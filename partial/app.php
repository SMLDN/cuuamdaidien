<?php

use Aloha\AppAloha;
use Aura\Di\ContainerBuilder;
use Cadd\Config\ContainerConfig;
use Cadd\Config\ControllerConfig;
use Aloha\Config\AlohaContainerConfig;

// --Init app-- //

// Container
$builder = new ContainerBuilder();
$container = $builder->newConfiguredInstance([
    AlohaContainerConfig::class,
    ContainerConfig::class,
    ControllerConfig::class
    // RouteMiddlewareConfig::class,
], $builder::AUTO_RESOLVE);

// Create app
$app = AppAloha::create($container);
