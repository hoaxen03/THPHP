<?php
include '../includes/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    // Thực hiện truy vấn xóa người dùng
    $stmt = $pdo->prepare("DELETE FROM User WHERE user_id = ?");
    $stmt->execute([$user_id]);
    
    // Chuyển hướng về danh sách người dùng sau khi xóa thành công
    header("Location: user_list.php");
    exit(); // Dừng lại để không chạy thêm mã sau đó
} else {
    // Nếu không có user_id, có thể chuyển hướng về danh sách người dùng
    header("Location: user_list.php");
    exit();
}
?>
