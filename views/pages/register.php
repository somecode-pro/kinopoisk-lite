<?php
/**
 * @var \App\Kernel\View\View $view
 */
?>

<?php $view->component('start') ?>
<h1>Register</h1>

<form action="/register" method="post">
    <p>email</p>
    <input type="text" name="email">
    <p>password</p>
    <input type="password" name="password">
    <div>
        <button>Register</button>
    </div>
</form>
<?php $view->component('end') ?>
