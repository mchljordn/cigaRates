<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CigaRates</title>
    <link rel="stylesheet" href="/css/style.css">
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
                <li><a href="/review">Reviews</a></li>
                <li><a href="/review/create">Add Review</a></li>
                <li><a href="/SignupController/store"> Sign Up </a></li>
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