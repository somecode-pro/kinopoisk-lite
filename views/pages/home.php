<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 */
?>

<?php $view->component('start'); ?>

<main>
    <div class="container">
        <h3 class="mt-3">Новинки</h3>
        <hr>
        <div class="movies">
            <a href="movie.html" class="card text-decoration-none movies__item">
                <img src="https://avatars.mds.yandex.net/get-kinopoisk-image/1773646/21324634-7afd-4443-8ac4-5c4097ac5b6c/600x900" height="200px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Пацаны</h5>
                    <p class="card-text">Оценка <span class="badge bg-warning warn__badge">7.9</span></p>
                    <p class="card-text">Действие сериала разворачивается в мире, где существуют супергерои. Именно они являются настоящими звездами.</p>
                </div>
            </a>
        </div>
    </div>
</main>

<?php $view->component('end'); ?>