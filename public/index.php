<?php
require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../config/config.inc.php";

global $config;

use Pecee\SimpleRouter\SimpleRouter;

/* Load external routes file */
require_once __DIR__ . '/../routes/routes.php';

// Start the routing
SimpleRouter::start();