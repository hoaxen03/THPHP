<?php
include '../includes/database.php';

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM SanPham WHERE product_id = ?");
    $stmt->execute([$product_id]);
    header("Location: product_list.php");
}
?>
