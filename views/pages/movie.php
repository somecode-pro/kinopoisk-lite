<?php
/**
 * @var \App\Kernel\Auth\AuthInterface $auth
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 * @var \App\Kernel\Storage\StorageInterface $storage
 * @var \App\Models\Movie $movie
 */
?>

<?php $view->component('start'); ?>

<main>
    <div class="container">
        <div class="one-movie">
            <div class="card mb-3 mt-3 one-movie__item">
                <div class="row g-3">
                    <div class="col-md-4">
                        <img src="<?php echo $storage->url($movie->preview()) ?>" class="img-fluid rounded one-movie__image" alt="<?php echo $movie->name() ?>">
                        <?php if ($auth->check()) { ?>
                            <form action="/reviews/add" method="post" class="m-3 w-100">
                                <input type="hidden" value="<?php echo $movie->id() ?>" name="id">
                                <select
                                    class="form-select <?php echo $session->has('rating') ? 'is-invalid' : '' ?>"
                                    name="rating"
                                    aria-label="Default select example"
                                >
                                    <option selected>Оценка</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <?php if ($session->has('rating')) { ?>
                                    <div id="name" class="invalid-feedback">
                                        <?php echo $session->getFlash('rating')[0] ?>
                                    </div>
                                <?php } ?>
                                <div class="form-floating mt-2">
                                    <textarea
                                        class="form-control <?php echo $session->has('comment') ? 'is-invalid' : '' ?>"
                                        name="comment"
                                        placeholder="Укажи свое мнение о фильме"
                                        id="floatingTextarea2"
                                        style="height: 100px"
                                    ></textarea>
                                    <label for="floatingTextarea2">Комментарий</label>
                                    <?php if ($session->has('comment')) { ?>
                                        <div id="name" class="invalid-feedback">
                                            <?php echo $session->getFlash('comment')[0] ?>
                                        </div>
                                    <?php } ?>
                                </div>
                                <button class="btn btn-primary mt-2">Оставить отзыв</button>
                            </form>
                        <?php } else { ?>
                            <div class="alert alert-warning m-3 w-100">
                                Для того, чтобы оставить отзыв, необходимо <a href="/login">авторизоваться</a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title"><?php echo $movie->name() ?></h1>
                            <p class="card-text">Оценка <span class="badge bg-warning warn__badge"><?php echo $movie->avgRating() ?></span></p>
                            <p class="card-text"><?php echo $movie->description() ?></p>
                            <p class="card-text"><small class="text-body-secondary">Добавлен <?php echo $movie->createdAt() ?></small></p>
                            <h4>Отзывы</h4>
                            <div class="one-movie__reviews">
                                <?php foreach ($movie->reviews() as $review) { ?>
                                    <?php $view->component('review_card', ['review' => $review]) ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $view->component('end'); ?>