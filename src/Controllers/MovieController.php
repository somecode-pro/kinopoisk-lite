<?php

namespace App\Controllers;

class MovieController
{
    public function index(): void
    {
        include_once APP_PATH.'/views/pages/movies.php';
    }
}
