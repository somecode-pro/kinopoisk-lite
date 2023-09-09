<?php

namespace App\Kernel\View;

interface ViewInterface
{
    public function page(string $name): void;

    public function component(string $name): void;
}
