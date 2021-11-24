<?php
require __DIR__ . "/../vendor/autoload.php";

$partialDir = __DIR__ . "/../partial/";

// Init
require_once $partialDir . "init.php";

// App
require_once $partialDir . "app.php";

// Middleware
require_once $partialDir . "middleware.php";

// Routes
require_once $partialDir . "route.php";

$app->run();