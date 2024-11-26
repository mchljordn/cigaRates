<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>
<div class="review-container">
    <?php if (session()->get('isLoggedIn')): ?>
        <a href="/review/create" class="btn btn-primary">Add New Review</a>
        < <div class="reviews-grid">
            <?php foreach ($reviews as $review): ?>
                <div class="review-card">
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
                        <span class="date">Posted on: <?= date('d M Y', strtotime($review['created_at'])) ?></span>
                        <span class="author">By: <?= esc($review['username']) ?></span>
                    </div>
                </div>
                <hr>
            <?php endforeach; ?>
    </div>
    </div>
<?php else: ?>
    <p>You must be <a href="signin">logged in</a> to see your reviews.</p>
<?php endif; ?>
<?= $this->endSection() ?>