<?php

use Dotenv\Dotenv;

ini_set("session.cookie_httponly", true);
session_name("pkqc_val");
// session_start();

// --Init settings-- //

// Eniroment Variables
$dotenv = Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

// Default timezone
date_default_timezone_set($_ENV["TIMEZONE"]);