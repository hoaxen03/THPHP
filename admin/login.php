<?php
session_start();
include '../includes/database.php';

// Kiểm tra khi biểu mẫu được gửi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Chuẩn bị và thực thi câu lệnh SQL để kiểm tra thông tin đăng nhập
    $stmt = $pdo->prepare("SELECT * FROM User WHERE username = :username AND password = :password");
    $stmt->execute(['username' => $username, 'password' => $password]);
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        $error = "Sai tên đăng nhập hoặc mật khẩu.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"> 
    <style>
/* CSS cơ bản cho form */
form {
    max-width: 300px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

label {
    margin-bottom: 5px;
}

input {
    display: block;
    width: 100%;
    margin-bottom: 10px;
    padding: 10px; /* Thêm padding để tăng không gian bên trong ô nhập */
    border: 1px solid #ccc; /* Thêm viền cho ô nhập */
    border-radius: 5px; /* Bo tròn cho ô nhập */
}

button {
    display: block;
    width: 100%;
    margin-bottom: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

.error {
    color: red;
    margin-top: 10px;
}
    </style>
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="" method="post">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Đăng nhập</button>
        <button type="button" onclick="window.location.href='../';">Thoát quản trị</button>        
        <!-- Hiển thị lỗi nếu thông tin đăng nhập sai -->
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
    </form>
</body>
</html>

