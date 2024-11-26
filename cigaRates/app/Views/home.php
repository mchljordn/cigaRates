<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>
<div class="home-container">
    <?php if(session()->get('isLoggedIn')): ?>
        <h2>Welcome, <?= esc($username) ?></h2>
    <?php else: ?>
        <h2>Welcome to CigaRates</h2>
    <?php endif; ?>
    
    <div class="reviews-section">
        <div class="section-header">
            <h3>Latest Reviews</h3>
            <div class="filter-controls">
                <select id="sortBy" class="form-control">
                    <option value="date">Sort by Date</option>
                    <option value="rating">Sort by Rating</option>
                </select>
            </div>
        </div>

        <div class="reviews-grid">
            <?php foreach ($latest_reviews as $review): ?>
                <div class="review-card">
                    <div class="review-header">
                        <h4><?= esc($review['product_name']) ?></h4>
                        <div class="rating">
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <span class="star <?= $i <= $review['rating'] ? 'filled' : '' ?>">★</span>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="review-preview">
                        <p><?= isset($review['review']) ? esc(substr($review['review'], 0, 150)) . '...' : '' ?></p>
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

    <?php if(session()->get('isLoggedIn')): ?>
        <div class="action-buttons">
            <a href="/review/create" class="btn btn-primary">Write a Review</a>
            <a href="/review" class="btn btn-secondary">View All Reviews</a>
        </div>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>