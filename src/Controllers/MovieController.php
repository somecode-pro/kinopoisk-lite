<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\Http\Redirect;

class MovieController extends Controller
{
    public function index(): void
    {
        $this->view('movies');
    }

    public function add(): void
    {
        $this->view('admin/movies/add');
    }

    public function store()
    {
        $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:50'],
        ]);

        if (! $validation) {
            (new Redirect())->to('/admin/movies/add');
            //dd('Validation failed', $this->request()->errors());
        }

        dd('Validation passed');
    }
}
