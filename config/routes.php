<?php

return [
    '/home' => function () {
        include_once __DIR__.'/../views/pages/home.php';
    },
    '/movies' => function () {
        include_once __DIR__.'/../views/pages/movies.php';
    },
];
