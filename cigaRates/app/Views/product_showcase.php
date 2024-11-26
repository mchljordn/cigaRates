<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>
    <div class="product-showcase-container">
        <h2>Product Showcase</h2>
        <div class="products-grid">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
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
                        <p>Brand   : <?= esc($product['brand'])?></p>
                        <p>Price   : Rp.<?= esc($product['price'])?></p>
                        
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?= $this->endSection() ?>