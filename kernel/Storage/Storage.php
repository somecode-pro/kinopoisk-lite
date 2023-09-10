<?php

namespace App\Kernel\Storage;

class Storage implements StorageInterface
{
    public function url(string $path): string
    {
        return "http://localhost:8000/storage/$path";
    }

    public function get(string $path): string
    {
        return file_get_contents($this->storagePath($path));
    }

    private function storagePath(string $path): string
    {
        return APP_PATH."/storage/$path";
    }
}
