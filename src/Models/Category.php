<?php

namespace App\Models;

class Category
{
    public function __construct(
        private int $id,
        private string $name,
        private string $createdAt,
        private string $updatedAt
    ) {
    }

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function createdAt(): string
    {
        return $this->createdAt;
    }

    public function updatedAt(): string
    {
        return $this->updatedAt;
    }
}
