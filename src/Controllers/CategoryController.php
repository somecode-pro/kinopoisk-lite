<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    private CategoryService $service;

    public function index(): void
    {
        $this->view('categories', [
            'categories' => $this->service()->all(),
        ]);
    }

    public function create(): void
    {
        $this->view('admin/categories/add');
    }

    public function store(): void
    {
        $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
        ]);

        if (! $validation) {
            foreach ($this->request()->errors() as $field => $errors) {
                $this->session()->set($field, $errors);
            }

            $this->redirect('/admin/categories/add');
        }

        $this->service()->store($this->request()->input('name'));

        $this->redirect('/admin');
    }

    public function destroy(): void
    {
        $this->service()->delete($this->request()->input('id'));

        $this->redirect('/admin');
    }

    public function edit(): void
    {
        $category = $this->service()->find($this->request()->input('id'));

        $this->view('admin/categories/update', [
            'category' => $category,
        ]);
    }

    public function update()
    {
        $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
        ]);

        if (! $validation) {
            foreach ($this->request()->errors() as $field => $errors) {
                $this->session()->set($field, $errors);
            }

            $this->redirect("/admin/categories/update?id={$this->request()->input('id')}");
        }

        $this->service()->update(
            $this->request()->input('id'),
            $this->request()->input('name')
        );

        $this->redirect('/admin');
    }

    private function service(): CategoryService
    {
        if (! isset($this->service)) {
            $this->service = new CategoryService($this->db());
        }

        return $this->service;
    }
}
