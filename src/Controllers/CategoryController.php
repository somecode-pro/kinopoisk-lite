<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class CategoryController extends Controller
{
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

        $this->db()->insert('categories', [
            'name' => $this->request()->input('name'),
        ]);

        $this->redirect('/admin');
    }
}
