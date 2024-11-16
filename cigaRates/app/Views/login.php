<?= $this->extend('templates/login_template') ?>

<?= $this->section('content') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style_Auth.css">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if(session()->get('success')) : ?>
        <p style="color: green; font-size: small;"><?= session()->get('success') ?></p>
    <?php endif; ?>
    <hr>
    <form action="/" method="post">
        <p>Email <input type="text" name="email" value="<?= set_value('email') ?>"></p>
        <p>Password <input type="password" name="password" value=""></p>
        <?php if(isset($validation)) : ?>
            <?= $validation->listErrors() ?>
        <?php endif; ?>
        <button id="auth_button_back"> <a href="/"></a>Back</button>
        <button type="submit">Login</button>
        <p>
            Don't have an account yet? <a href="register">Click here</a> to register
        </p>
    </form>
</body>
</html>