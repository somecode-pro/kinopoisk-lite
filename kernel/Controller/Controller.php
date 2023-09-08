<?php

namespace App\Kernel\Controller;

use App\Kernel\View\View;

abstract class Controller
{
    private View $view;

    public function view(string $name): void
    {
        $this->view->page($name);
    }

    public function setView(View $view): void
    {
        $this->view = $view;
    }
}
