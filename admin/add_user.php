<?php
include '../includes/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare("INSERT INTO User (username, password, email) VALUES (?, ?, ?)");
    $stmt->execute([$username, $password, $email]);
    header("Location: user_list.php"); // Chuyển hướng về danh sách đơn hàng sau khi cập nhật thành công

}
?>
