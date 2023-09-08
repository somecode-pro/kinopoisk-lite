<?php

use App\Controllers\HomeController;
use App\Controllers\MovieController;
use App\Router\Route;

return [
    Route::get('/home', [HomeController::class, 'index']),
    Route::get('/movies', [MovieController::class, 'index']),
    Route::post('/test', function () {
        include_once APP_PATH.'/views/pages/movies.php';
    }),
];
