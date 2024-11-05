<?php
include 'includes/database.php';
include 'includes/header.php'; // Bao gồm header

// Lấy tất cả sản phẩm từ cơ sở dữ liệu
$stmt = $pdo->query("SELECT * FROM SanPham");
$products = $stmt->fetchAll();
?>

<main>
    <h1>Danh sách sản phẩm</h1>
    <div class="product-list">
        <?php foreach ($products as $product): ?>
            <div class="product-item">
            <img src="images/<?= htmlspecialchars($product['image_url']) ?>" alt="<?= htmlspecialchars($product['product_name']) ?>">
                <h2><?= htmlspecialchars($product['product_name']) ?></h2>
                <p>Giá: <?= number_format($product['price'], 2) ?> VNĐ</p>
                <button class="buy-btn" data-product-id="<?= $product['product_id'] ?>" data-product-name="<?= htmlspecialchars($product['product_name']) ?>" data-product-price="<?= $product['price'] ?>">Mua hàng</button>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Popup thông tin mua hàng -->
    <div id="purchase-modal" style="display:none;">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Thông tin mua hàng</h2>
            <form id="purchase-form">
                <input type="hidden" name="product_id" id="product_id">
                <label for="customer_info">Thông tin người mua:</label>
                <input type="text" name="customer_info" id="customer_info" required>
                <label for="quantity">Số lượng:</label>
                <input type="number" name="quantity" id="quantity" min="1" required>
                <button type="submit">Xác nhận mua hàng</button>
            </form>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; // Bao gồm footer ?>

<script>
    $(document).ready(function() {
        // Mở popup khi nhấn nút mua hàng
        $('.buy-btn').click(function() {
            var productId = $(this).data('product-id');
            $('#product_id').val(productId);
            $('#purchase-modal').show();
        });

        // Đóng popup khi nhấn nút đóng
        $('.close').click(function() {
            $('#purchase-modal').hide();
        });

        // Gửi thông tin mua hàng
        $('#purchase-form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'process_order.php',
                data: $(this).serialize(),
                success: function(response) {
                    alert(response); // Hiển thị thông báo
                    $('#purchase-modal').hide();
                }
            });
        });
    });
</script>
