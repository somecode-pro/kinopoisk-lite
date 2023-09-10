<?php

namespace App\Models;

use App\Kernel\Auth\User;

class Review
{
    public function __construct(
        private int $id,
        private string $rating,
        private string $comment,
        private string $createdAt,
        private User $user,
    ) {
    }

    public function id(): int
    {
        return $this->id;
    }

    public function rating(): string
    {
        return $this->rating;
    }

    public function comment(): string
    {
        return $this->comment;
    }

    public function createdAt(): string
    {
        return $this->createdAt;
    }

    public function user(): User
    {
        return $this->user;
    }
}
