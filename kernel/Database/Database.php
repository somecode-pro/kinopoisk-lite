<?php

namespace App\Kernel\Database;

class Database implements DatabaseInterface
{
    private \PDO $pdo;

    public function __construct()
    {
        $this->connect();
    }

    public function insert(string $table, array $data): int|false
    {
        // TODO: Implement insert() method.
    }

    private function connect(): void
    {
        $this->pdo = new \PDO(
            'mysql:host=localhost;port=3306;dbname=movie_db;charset=utf8',
            'root',
            'root'
        );
    }
}
