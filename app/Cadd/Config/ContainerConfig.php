<?php

namespace Cadd\Config;

use Latte\Engine;
use Aura\Di\Container;
use Latte\Loaders\FileLoader;
use Illuminate\Database\Capsule\Manager;
use Aura\Di\ContainerConfig as AuraContainerConfig;

class ContainerConfig extends AuraContainerConfig
{
    /**
     * @inheritDoc
     *
     * @param Container $container
     * @return void
     */
    public function define(Container $container): void
    {
        // db
        $container->set("db", function () use ($container) {
            $capsule = new Manager;
            $dbConfig = $container->get("setting")->get("db");
            $capsule->addConnection($dbConfig);

            $capsule->setAsGlobal();
            $capsule->bootEloquent();

            return $capsule;
        });

        $container->set("view", function () {
            $latte = new Engine();
            $latte->setLoader(new FileLoader(__DIR__ . "/../../../view"));
            return $latte;
        });

        $container->types[Engine::class] = $container->lazyGet("view");
    }

    /**
     * @inheritDoc
     *
     * @param Container $container
     * @return void
     */
    public function modify(Container $container): void
    {
        $container->get("db");
        $container->get("view");
    }
}
