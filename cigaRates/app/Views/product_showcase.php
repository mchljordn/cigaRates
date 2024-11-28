<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>
<div class="product-showcase-container">
    <h2>Product Showcase</h2>
    <div class="search-container">
        <input type="text" class="search-input" id="productSearch" placeholder="Search products...">
    </div>
    <div class="products-grid">
        <?php foreach ($products as $product): ?>
            <div class="product-card" data-name="<?= strtolower(esc($product['product_name'])) ?>" data-brand="<?= strtolower(esc($product['brand'])) ?>">
                <div class="product-image-container">
                    <?php
                    $imagePath = "cigaRates img folder/" . esc($product['product_id']) . ".png";
                    if (file_exists(FCPATH . $imagePath)): ?>
                        <img src="/<?= $imagePath ?>" alt="<?= esc($product['product_name']) ?>" class="product-image">
                        </a>
                    <?php endif; ?>
                </div>
                <div class="product-details">
                    <h3><?= esc($product['product_name']) ?></h3>
                    <p>Desc&nbsp&nbsp: <?= esc($product['description']) ?></p>
                    <p>Brand : <?= esc($product['brand']) ?></p>
                    <p>Price : Rp.<?= esc($product['price']) ?></p>
                    <div class="product-actions">
                        <a href="/review/create/<?= $product['product_id'] ?>" class="btn btn-primary">Review this cig</a>
                        <a href="/product/<?= $product['product_id'] ?>" class="btn btn-secondary">View Reviews</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script>
document.getElementById('productSearch').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const products = document.querySelectorAll('.product-card');
    let hasResults = false;

    products.forEach(product => {
        const name = product.dataset.name;
        const brand = product.dataset.brand;
        const isVisible = name.includes(searchTerm) || brand.includes(searchTerm);
        product.style.display = isVisible ? 'flex' : 'none';
        if (isVisible) hasResults = true;
    });

    const noResults = document.querySelector('.no-results');
    if (!hasResults) {
        if (!noResults) {
            const message = document.createElement('div');
            message.className = 'no-results';
            message.textContent = 'No products found';
            document.querySelector('.products-grid').appendChild(message);
        }
    } else if (noResults) {
        noResults.remove();
    }
});
</script>
<?= $this->endSection() ?>