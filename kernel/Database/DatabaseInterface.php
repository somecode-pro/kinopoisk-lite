<?php

namespace App\Kernel\Database;

interface DatabaseInterface
{
    public function insert(string $table, array $data): int|false;

    public function first(string $table, array $conditions = []): ?array;

    public function get(string $table, array $conditions = []): array;

    public function delete(string $table, array $conditions = []): void;
}
