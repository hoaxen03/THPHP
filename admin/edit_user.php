<?php
include '../includes/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare("UPDATE User SET username = ?, email = ? WHERE user_id = ?");
    $stmt->execute([$username, $email, $user_id]);
    header("Location: user_list.php"); // Chuyển hướng về danh sách đơn hàng sau khi cập nhật thành công

}
?>
