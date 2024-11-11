<?php
include '../includes/database.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Mã hóa mật khẩu
$email = $_POST['email'];

// Mã hóa mật khẩu
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Thêm người dùng vào cơ sở dữ liệu
$sql = "INSERT INTO User (username, password, email) VALUES (:username, :password, :email)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':username' => $username,
    ':password' => $hashed_password,
    ':email' => $email
]);

header("Location: user_list.php"); // Điều hướng trở lại danh sách người dùng
exit;
?>
