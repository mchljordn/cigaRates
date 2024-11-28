<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>

<div class="review-form-container">
    <h2>Edit Review for <?= esc($review['product_name']) ?></h2>

    <?php if (session()->has('error')): ?>
        <div class="alert alert-danger"><?= session('error') ?></div>
    <?php endif; ?>

    <form action="/review/update/<?= $review['id'] ?>" method="post">
        <?= csrf_field() ?>

        <div class="product-form-group">
            <label for="rating">Rating</label>
            <div class="star-rating">
                <input type="radio" id="star5" name="rating" value="5">
                <label for="star5">★</label>
                <input type="radio" id="star4" name="rating" value="4">
                <label for="star4">★</label>
                <input type="radio" id="star3" name="rating" value="3">
                <label for="star3">★</label>
                <input type="radio" id="star2" name="rating" value="2">
                <label for="star2">★</label>
                <input type="radio" id="star1" name="rating" value="1">
                <label for="star1">★</label>
            </div>
        </div>

        <div class="form-group">
            <label for="review">Review:</label>
            <textarea name="review" id="review" class="form-control" rows="5"
                required><?= esc($review['text']) ?></textarea>
        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Update Review</button>
            <a href="/review" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
<?= $this->endSection() ?>