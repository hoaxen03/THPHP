<?php
include '../includes/database.php';

$user_id = $_POST['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];

// Kiểm tra xem có thay đổi mật khẩu không
if (!empty($_POST['password'])) {
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "UPDATE User SET username = :username, password = :password, email = :email WHERE user_id = :user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':username' => $username,
        ':password' => $hashed_password,
        ':email' => $email,
        ':user_id' => $user_id
    ]);
} else {
    // Nếu không có mật khẩu mới, chỉ cập nhật tên và email
    $sql = "UPDATE User SET username = :username, email = :email WHERE user_id = :user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':username' => $username,
        ':email' => $email,
        ':user_id' => $user_id
    ]);
}

header("Location: user_list.php");
exit;
?>
