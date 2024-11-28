<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>
<div class="product-view-container">
    <h2><?= esc($product['product_name']) ?></h2>
    <p>Desc&nbsp&nbsp: <?= esc($product['description']) ?></p>
    <p>Brand : <?= esc($product['brand']) ?></p>
    <p>Price : Rp.<?= esc($product['price']) ?></p>

    <h3>Reviews</h3>
    <div class="reviews-grid">
        <?php foreach ($reviews as $review): ?>
            <div class="review-card">
                <div class="review-header">
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
                    <span class="date">Posted on: <?= date('d M Y', strtotime($review['created_at'])) ?></span>
                    <span class="author">By: <?= esc($review['username']) ?></span>
                </div>
            </div>
            <hr>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>