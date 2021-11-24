<?php

use Aloha\Helper\AlohaErrorHandler;
use Slim\Middleware\ErrorMiddleware;
use Slim\Views\TwigMiddleware;

// --App middleware-- //

// Routing Middleware
$app->addRoutingMiddleware();

// Body Parsing Middleware Parser
$app->addBodyParsingMiddleware();

// Error
$setting = $container->get("setting");
$errorMiddleware = new ErrorMiddleware($app->getCallableResolver(), $app->getResponseFactory(),
    $setting->get("errorMiddleware.displayErrorDetails"),
    $setting->get("errorMiddleware.logErrors"),
    $setting->get("errorMiddleware.logErrorDetails"));

$app->add($errorMiddleware);
