<?php

namespace App;

use App\Router\Router;

class App
{
    public function run(): void
    {
        $router = new Router();

        $uri = $_SERVER['REQUEST_URI'];

        $router->dispatch($uri);
    }
}
