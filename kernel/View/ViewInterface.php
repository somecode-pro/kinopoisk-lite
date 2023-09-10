<?php

namespace App\Kernel\View;

interface ViewInterface
{
    public function page(string $name, array $data = []): void;

    public function component(string $name, array $data = []): void;
}
