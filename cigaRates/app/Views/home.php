<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>
<div class="home-container">
    <?php if (session()->get('isLoggedIn')): ?>
        <h2>Welcome, <?= esc($username) ?> to CigaRates</h2>
    <?php else: ?>
        <h2>Welcome to CigaRates</h2>
    <?php endif; ?>


    <div class="random-products-section">
        <div class="section-header">
            <h3>Start Reviewing!</h3>
        </div>
        <div class="products-grid-home">
            <?php foreach ($random_cigarettes as $product): ?>
                <div class="product-card-home">
                    <div class="product-image-container">
                        <?php
                        $imagePath = "cigaRates img folder/" . esc($product['product_id']) . ".png";
                        if (file_exists(FCPATH . $imagePath)): ?>
                            <a href="/review/create/<?= $product['product_id'] ?>">
                                <img src="/<?= $imagePath ?>" alt="<?= esc($product['product_name']) ?>" class="product-image">
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="product-details">
                        <a href="/review/create/<?= $product['product_id'] ?>">
                            <h3><?= esc($product['product_name']) ?></h3>
                        </a>
                        <p>Desc&nbsp&nbsp: <?= esc($product['description']) ?></p>
                        <p>Brand : <?= esc($product['brand']) ?></p>
                        <p>Price : Rp.<?= esc($product['price']) ?></p>
                        <a href="/product/<?= $product['product_id'] ?>" class="btn btn-secondary">View Reviews</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php if (session()->get('isLoggedIn')): ?>
        <div class="action-buttons">
            <a href="/review/create" class="btn review-another-home">Review another product</a>
            <a href="/review" class="btn review-another-home">My Reviews</a>
        </div>
    <?php endif; ?>

    <div class="reviews-section">
        <div class="section-header">
            <h3>Latest Reviews</h3>
        </div>

        <div class="reviews-grid">
            <?php foreach ($latest_reviews as $review): ?>
                <div class="review-card-home">
                    <div class="review-header">
                        <h3><?= esc($review['product_name']) ?></h3>
                        <div class="rating">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <span class="star <?= $i <= $review['rating'] ? 'filled' : '' ?>">★</span>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="review-body">
                        <p><?= isset($review['text']) ? esc($review['text']) : '' ?></p>
                    </div>
                    <div class="review-footer">
                        <span class="author">by <?= esc($review['username']) ?></span>
                        <span class="date"><?= date('d M Y', strtotime($review['created_at'])) ?></span>
                    </div>
                </div>
                <hr>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>