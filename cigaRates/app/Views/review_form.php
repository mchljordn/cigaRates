<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>
<div class="review-form-container">
    <h2>Write a Review</h2>

    <?php if (session()->has('errors')): ?>
        <div class="alert alert-danger">
            <?php foreach (session('errors') as $error): ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="/review/insertReview" method="post">
        <?= csrf_field() ?>
        <?php if (!$selectedProduct): ?>
            <div class="form-group">
                <label for="product_id">Select Product</label>
                <select name="product_id" id="product_id" class="form-control" required>
                    <option value="">Choose a product...</option>
                    <?php foreach ($products as $product): ?>
                        <option value="<?= $product['product_id'] ?>">
                            <?= esc($product['product_name']) ?> - <?= esc($product['brand']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        <?php else: ?>
            <input type="hidden" name="product_id" value="<?= $selectedProduct['product_id'] ?>">
            <h3><?= esc($selectedProduct['product_name']) ?> - <?= esc($selectedProduct['brand']) ?></h3>
            <div class="product-image-container">
                <?php
                $imagePath = "cigaRates img folder/" . esc($selectedProduct['product_id']) . ".png";
                if (file_exists(FCPATH . $imagePath)): ?>
                    <img src="/<?= $imagePath ?>" alt="<?= esc($selectedProduct['product_name']) ?>" class="product-image">
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" required>
        </div>

        <div class="form-group">
            <label for="review">Your Review</label>
            <textarea name="review" id="review" class="form-control" required rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit Review</button>
    </form>
</div>
<?= $this->endSection() ?>