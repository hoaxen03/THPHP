<?php
include 'includes/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $customer_info = $_POST['customer_info'];

    // Lấy thông tin sản phẩm để tính tổng giá
    $stmt = $pdo->prepare("SELECT price FROM SanPham WHERE product_id = ?");
    $stmt->execute([$product_id]);
    $product = $stmt->fetch();

    if ($product) {
        $total_price = $product['price'] * $quantity;

        // Thêm đơn hàng vào cơ sở dữ liệu
        $stmt = $pdo->prepare("INSERT INTO DonHang (product_id, quantity, total_amount, customer_name, order_date) VALUES (?, ?, ?, ?, NOW())");
        $stmt->execute([$product_id, $quantity, $total_price, $customer_info]);

        echo "Đơn hàng đã được đặt thành công!";
    } else {
        echo "Sản phẩm không tồn tại!";
    }
} else {
    echo "Yêu cầu không hợp lệ!";
}
