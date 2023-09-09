<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 */
?>

<?php $view->component('start') ?>
<h1>Login</h1>

<form action="/login" method="post">
    <?php if ($session->has('error')) { ?>
        <p style="color: red">
            <?php echo $session->getFlash('error') ?>
        </p>
    <?php } ?>
    <p>email</p>
    <input type="text" name="email">
    <p>password</p>
    <input type="password" name="password">
    <div>
        <button>Login</button>
    </div>
</form>
<?php $view->component('end') ?>
