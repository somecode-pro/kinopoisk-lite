<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 * @var \App\Models\Category $category
 */
?>

<?php $view->component('start'); ?>
    <main>
        <div class="container">
            <h3 class="mt-3">Изменить - <?php echo $category->name() ?></h3>
            <hr>
        </div>
        <div class="container">
            <form action="/admin/categories/update" method="post" class="d-flex flex-column justify-content-center w-50 gap-2 mt-5 mb-5">
                <input type="hidden" name="id" value="<?php echo $category->id() ?>">
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <input
                                type="text"
                                class="form-control <?php echo $session->has('name') ? 'is-invalid' : '' ?>"
                                id="name"
                                value="<?php echo $category->name() ?>"
                                name="name"
                                placeholder="Иван Иванов"
                            >
                            <label for="name">Название</label>
                            <?php if ($session->has('name')) { ?>
                                <div id="name" class="invalid-feedback">
                                    <?php echo $session->getFlash('name')[0] ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <button class="btn btn-success">Сохранить</button>
                </div>
            </form>
        </div>
    </main>

<?php $view->component('end'); ?>