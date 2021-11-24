<?php

use Aloha\Utility\Str;
use Cadd\Controller\ApiController;
use Slim\Routing\RouteCollectorProxy;
use Aloha\Middleware\ApiResponseMiddleware;


$app->group("/api", function (RouteCollectorProxy $group) {
    $group->get("/noi-cong/{inner:". Str::SLUG_PATTERN ."}", ApiController::class . ":noiCong");
})->add(new ApiResponseMiddleware());