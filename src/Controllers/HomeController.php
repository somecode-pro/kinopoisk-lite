<?php

namespace App\Controllers;

use App\Kernel\View\View;

class HomeController
{
    public function index(): void
    {
        $view = new View();

        $view->page('home');
    }
}
