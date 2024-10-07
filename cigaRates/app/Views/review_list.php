<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>
    <h2>Daftar Review</h2>
    <?php foreach ($reviews as $review): ?>
        <div class="review">
            <h3><?= esc($review['product_name']) ?></h3>
            <p>Rating: <?= esc($review['rating']) ?>/5</p>
            <p><?= esc($review['review']) ?></p>
        </div>
    <?php endforeach; ?>
<?= $this->endSection() ?>