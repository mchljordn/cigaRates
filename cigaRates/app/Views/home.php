<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>
<h2>Selamat Datang <?= esc($username) ?> di CigaRates</h2>
<p>Website sederhana untuk berbagi pengalaman merokok Anda.</p>

<h3>Review Terbaru</h3>
<div class="review-list">
    <?php foreach ($latest_reviews as $review): ?>
        <div class="review-item">
            <h4><?= esc($review['product_name']) ?></h4>
            <p>Rating: <?= esc($review['rating']) ?>/5</p>
            <p><?= substr(esc($review['review']), 0, 100) ?>...</p>
            <a href="/review/<?= $review['id'] ?>">Baca selengkapnya</a>
        </div>
    <?php endforeach; ?>
</div>

<h3>Review Tertinggi</h3>
<div class="review-list">
    <?php foreach ($top_rated as $review): ?>
        <div class="review-item">
            <h4><?= esc($review['product_name']) ?></h4>
            <p>Rating: <?= esc($review['rating']) ?>/5</p>
            <p><?= substr(esc($review['review']), 0, 100) ?>...</p>
            <a href="/review/<?= $review['id'] ?>">Baca selengkapnya</a>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection() ?>