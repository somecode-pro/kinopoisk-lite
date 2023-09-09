<?php

namespace App\Kernel\Auth;

use App\Kernel\Database\DatabaseInterface;
use App\Kernel\Session\SessionInterface;

class Auth implements AuthInterface
{
    public function __construct(
        private DatabaseInterface $database,
        private SessionInterface $session
    ) {
    }

    public function attempt(string $username, string $password): bool
    {
        // TODO: Implement attempt() method.
    }

    public function logout(): void
    {
        // TODO: Implement logout() method.
    }

    public function check(): bool
    {
        // TODO: Implement check() method.
    }

    public function user(): ?array
    {
        // TODO: Implement user() method.
    }
}
