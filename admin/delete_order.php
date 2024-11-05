<?php
include '../includes/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_order_id'])) {
    $order_id = $_POST['delete_order_id'];

    // Delete order from the database
    $stmt = $pdo->prepare("DELETE FROM DonHang WHERE order_id = ?");
    $stmt->execute([$order_id]);

    // Redirect back to order_list.php after deletion
    header("Location: order_list.php");
    exit(); // Ensure no further code runs after redirect
} else {
    // If accessed directly without POST data, redirect to order_list.php
    header("Location: order_list.php");
    exit();
}
