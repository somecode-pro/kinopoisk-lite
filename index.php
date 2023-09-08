<?php

require_once __DIR__.'/vendor/autoload.php';

$routes = require_once __DIR__.'/config/routes.php';

$uri = $_SERVER['REQUEST_URI'];

$routes[$uri]();
