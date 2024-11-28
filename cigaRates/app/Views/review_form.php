<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>


<form action="/review/insertReview" method="post">
    <?= csrf_field() ?>
    <?php if (!$selectedProduct): ?>
        <div class="review-form-container">
            <h2>Write a Review</h2>
            <hr>

            <?php if (session()->has('errors')): ?>
                <div class="alert alert-danger">
                    <?php foreach (session('errors') as $error): ?>
                        <p><?= $error ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
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
            <div class="review-form-container">
                <h2>Write a Review for <?= esc($selectedProduct['product_name']) ?></h2>
                <hr>
                <?php if (session()->has('errors')): ?>
                    <div class="alert alert-danger">
                        <?php foreach (session('errors') as $error): ?>
                            <p><?= $error ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <input type="hidden" name="product_id" value="<?= $selectedProduct['product_id'] ?>">
                <h3></h3>
                <div class="product-image-container">
                    <?php
                    $imagePath = "cigaRates img folder/" . esc($selectedProduct['product_id']) . ".png";
                    if (file_exists(FCPATH . $imagePath)): ?>
                        <img src="/<?= $imagePath ?>" alt="<?= esc($selectedProduct['product_name']) ?>" class="product-image-review">
                    <?php endif; ?>
                </div>
            <?php endif; ?>

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

            <div class="product-form-group">
                <label for="review">Your Review</label>
                <textarea name="review" id="review" class="form-control" required rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit Review</button>
</form>
</div>
<?= $this->endSection() ?>