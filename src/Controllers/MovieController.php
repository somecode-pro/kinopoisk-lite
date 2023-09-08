<?php

namespace App\Controllers;

use App\Kernel\View\View;

class MovieController
{
    public function index(): void
    {
        $view = new View();

        $view->page('movies');
    }
}
