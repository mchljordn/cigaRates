<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up</title>
    <link rel="stylesheet" href="/css/styleAuth.css">
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <?php if (isset($validation)): ?>
            <ul class="validation-errors">
                <?= $validation->listErrors() ?>
            </ul>
        <?php endif; ?>

        <form action="<?php echo base_url(); ?>/SignupController/store" method="post">
            <div>
                <input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>">
            </div>
            <div>
                <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
            </div>
            <div>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div>
                <input type="password" name="confirmpassword" placeholder="Confirm Password">
            </div>
            <div class="d-grid">
            <p id="login-text">Already have an account? <a href='SigninController/index'>Login here</a></p>
            <button id="back-button" type="button" onclick="location.href='/'">Back</button>
            <button type="submit">Submit</button>
            </div>
        </form>

        <footer>
            <p>&copy; <?= date('Y') ?> cigaRates</p>
        </footer>
    </div>
</body>
</html>