<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var array<\App\Models\Category> $categories
 */
?>

<?php $view->component('start'); ?>

<main>
    <div class="container">
        <h3 class="mt-3">Жанры</h3>
        <hr>
        <div class="alert alert-info">TODO: Этот раздел нужно завершить</div>
        <div class="movies">
            <?php foreach ($categories as $category) { ?>
                <a href="#" class="card text-decoration-none movies__item">
                    <img src="https://glossymag.ru/thetsoaz/2021/10/000-10-glavnyh-filmov-opredelivshih-zhanr-francuzskaya-kinokomediya.jpg" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $category->name() ?></h5>
                        <p class="card-text">Фильмов <span class="badge bg-info warn__badge">10</span></p>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</main>

<?php $view->component('end'); ?>