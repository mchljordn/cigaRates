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
            <img src="image/cigarates_white.png" width="200">
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
                <?php if(!session()->get('isLoggedIn')): ?>
                <li><a href="/signup"> Sign Up </a></li>
                <?php else:?>
                    <li><a href="/logout"> Logout </a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    <footer>
        <p>&copy; 2024 CigaRates. All rights reserved.</p>
    </footer>
</body>
</html>

