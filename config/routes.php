<?php

return [
    '/home' => function () {
        include_once APP_PATH.'/views/pages/home.php';
    },
    '/movies' => function () {
        include_once APP_PATH.'/views/pages/movies.php';
    },
];
