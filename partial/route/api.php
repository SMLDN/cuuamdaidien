<?php

use Aloha\Utility\Str;
use Cadd\Controller\ApiController;
use Slim\Routing\RouteCollectorProxy;
use Aloha\Middleware\ApiResponseMiddleware;


$app->group("/api", function (RouteCollectorProxy $group) {
    // $group->get("/noi-cong/{inner:". Str::SLUG_PATTERN ."}", ApiController::class . ":noiCong");
    $group->get("/notify/{footprint}/{channelId:[0-9]+}/{msg}", ApiController::class . ":sendDiscordMsg");
})->add(new ApiResponseMiddleware());
