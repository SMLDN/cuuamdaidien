<?php

use Aloha\Utility\Str;
use Cadd\Controller\HomeController;
use Slim\Routing\RouteCollectorProxy;
use Cadd\Controller\NoiCongController;
use Cadd\Controller\KinhMachController;

$app->get("/", HomeController::class . ":index")->setName("index");



$app->group("/noi-cong", function (RouteCollectorProxy $group) {
    // $group->get("", NoiCongController::class . ":index")->setName("noi-cong.index");
    // $group->get("/", NoiCongController::class . ":index");

    $group->group("/{inner:" . Str::SLUG_PATTERN . "}", function (RouteCollectorProxy $g2) {
        $g2->get("", NoiCongController::class . ":detail")->setName("noi-cong.detail0");
        $g2->get("/{level:[0-9]*}", NoiCongController::class . ":detail")->setName("noi-cong.detail");
    });
});

$app->group("/kinh-mach", function (RouteCollectorProxy $group) {
    $group->group("/{kinhMach:" . Str::SLUG_PATTERN . "}", function (RouteCollectorProxy $g2) {
        $g2->get("", KinhMachController::class . ":detail")->setName("kinh-mach.detail0");
        $g2->get("/{level:[0-9]*}", KinhMachController::class . ":detail")->setName("kinh-mach.detail");
    });
});
