<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>
    <h2>Tambah Review</h2>
    <form action="/review/create" method="post">
        <label for="product_name">Nama Produk:</label>
        <input type="text" id="product_name" name="product_name" required>

        <label for="rating">Rating:</label>
        <select id="rating" name="rating" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        <label for="review">Review:</label>
        <textarea id="review" name="review" required></textarea>

        <button type="submit">Kirim Review</button>
    </form>
<?= $this->endSection() ?>