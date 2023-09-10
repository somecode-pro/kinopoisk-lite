<?php

namespace App\Services;

use App\Kernel\Database\DatabaseInterface;
use App\Kernel\Upload\UploadedFileInterface;

class MovieService
{
    public function __construct(
        private DatabaseInterface $db
    ) {
    }

    public function store(string $name, string $description, UploadedFileInterface $image, int $category): false|int
    {
        $filePath = $image->move('movies');

        return $this->db->insert('movies', [
            'name' => $name,
            'description' => $description,
            'preview' => $filePath,
            'category_id' => $category,
        ]);
    }
}
