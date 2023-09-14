<?php

namespace App\Kernel\Storage;

interface StorageInterface
{
    public function url(string $path): string;

    public function get(string $path): string;
}
