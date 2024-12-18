<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CigaRates</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/public/js/script.js"></script>
</head>

<body>
    <header>
        <span>
            <img src="<?= base_url('image/cigarates_white.png') ?>" width="200">
        </span>
        <span>
            <h1>CigaRates</h1>

        </span>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/review">My Reviews</a></li>
                <li><a href="/review/create">Add Review</a></li>
                <li><a href="/product/showcase">Product Showcase</a></li>
                <?php if (!session()->get('isLoggedIn')): ?>
                    <li><a href="/signup"> Sign Up </a></li>
                <?php else: ?>
                    <li><a href="/logout"> Logout </a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    <footer>
        <p class='p-footer-caution' style='text-align: center;'>Attention! This site is only intended for and/or smokers
            aged 21
            years and over (21+)</p>
        <p class='p-footer-caution' style='text-align: center;'>Be an enlightened and responsible smoker</p>
        <p class='p-footer' style='text-align: center;'>&copy; 2024 CigaRates. All rights reserved.</p>
    </footer>
</body>
                    
</html>