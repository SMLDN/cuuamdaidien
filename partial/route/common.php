<?php

use Aloha\Utility\Str;
use Cadd\Controller\HomeController;
use Slim\Routing\RouteCollectorProxy;
use Cadd\Controller\NoiCongController;

$app->get("/", HomeController::class . ":index")->setName("index");



$app->group("/noi-cong", function (RouteCollectorProxy $group) {
    $group->get("", NoiCongController::class . ":index")->setName("noi-cong.index");
    $group->get("/", NoiCongController::class . ":index");

    $group->group("/{inner:". Str::SLUG_PATTERN ."}", function (RouteCollectorProxy $g2) {
        $g2->get("", NoiCongController::class . ":detail")->setName("noi-cong.detail0");
        $g2->get("/{level:[0-9]*}", NoiCongController::class . ":detail")->setName("noi-cong.detail");
    });
    
});