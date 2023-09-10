<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class AdminController extends Controller
{
    public function index(): void
    {
        $this->view('admin/index');
    }
}
