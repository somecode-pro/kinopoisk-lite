<?php

namespace App\Kernel\Middleware;

interface MiddlewareInterface
{
    public function check(array $middlewares = []): void;
}
