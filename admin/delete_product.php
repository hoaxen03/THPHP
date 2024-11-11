<?php
include '../includes/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_product_id'])) {
    $product_id = $_POST['delete_product_id'];

    // Chuẩn bị câu lệnh xóa sản phẩm theo product_id
    $stmt = $pdo->prepare("DELETE FROM SanPham WHERE product_id = ?");
    $stmt->execute([$product_id]);

    // Sau khi xóa, chuyển hướng về trang danh sách sản phẩm
    header("Location: product_list.php");
    exit();
}
