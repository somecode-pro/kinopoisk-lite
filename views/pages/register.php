<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 */
?>

<?php $view->component('start'); ?>
    <main>
        <div class="container">
            <h3 class="mt-3">Регистрация</h3>
            <hr>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="/register" method="post" class="d-flex flex-column justify-content-center w-50 gap-2 mt-5 mb-5">
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <input
                                type="text"
                                class="form-control <?php echo $session->has('name') ? 'is-invalid' : '' ?>"
                                id="name"
                                name="name"
                                placeholder="Иван Иванов"
                            >
                            <label for="name">Имя</label>
                            <?php if ($session->has('name')) { ?>
                                <div id="name" class="invalid-feedback">
                                    <?php echo $session->getFlash('name')[0] ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <input
                                type="email"
                                class="form-control <?php echo $session->has('email') ? 'is-invalid' : '' ?>"
                                name="email"
                                id="email"
                                placeholder="name@areaweb.su"
                            >
                            <label for="email">E-mail</label>
                            <?php if ($session->has('email')) { ?>
                                <div id="email" class="invalid-feedback">
                                    <?php echo $session->getFlash('email')[0] ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <input
                                type="password"
                                class="form-control <?php echo $session->has('password') ? 'is-invalid' : '' ?>"
                                id="password"
                                name="password"
                                placeholder="*********"
                            >
                            <label for="password">Пароль</label>
                            <?php if ($session->has('password')) { ?>
                                <div id="password" class="invalid-feedback">
                                    <?php echo $session->getFlash('password')[0] ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="*********">
                            <label for="password_confirmation">Подтверждение</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <button class="btn btn-primary">Создать аккаунт</button>
                </div>
            </form>
        </div>
    </main>

<?php $view->component('end'); ?>