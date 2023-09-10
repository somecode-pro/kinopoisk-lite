<?php

namespace App\Services;

use App\Kernel\Database\DatabaseInterface;
use App\Models\Category;

class CategoryService
{
    public function __construct(
        private DatabaseInterface $db
    ) {
    }

    /**
     * @return array<Category>
     */
    public function all(): array
    {
        $categories = $this->db->get('categories');

        return array_map(function ($category) {
            return new Category(
                id: $category['id'],
                name: $category['name'],
                createdAt: $category['created_at'],
                updatedAt: $category['updated_at']
            );
        }, $categories);
    }

    public function delete(int $id): void
    {
        $this->db->delete('categories', [
            'id' => $id,
        ]);
    }

    public function store(string $name): int
    {
        return $this->db->insert('categories', [
            'name' => $name,
        ]);
    }

    public function find(int $id): ?Category
    {
        $category = $this->db->first('categories', [
            'id' => $id,
        ]);

        if (! $category) {
            return null;
        }

        return new Category(
            id: $category['id'],
            name: $category['name'],
            createdAt: $category['created_at'],
            updatedAt: $category['updated_at']
        );
    }

    public function update(int $id, string $name): void
    {
        $this->db->update('categories', [
            'name' => $name,
        ], [
            'id' => $id,
        ]);
    }
}
