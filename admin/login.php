<?php
session_start();
include '../includes/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Truy vấn để lấy thông tin người dùng theo username
    $stmt = $pdo->prepare("SELECT * FROM User WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    // Kiểm tra nếu người dùng tồn tại và mật khẩu nhập vào khớp với mật khẩu mã hóa
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_name'] = $user['name']; // Lưu tên người quản trị
        header("Location: admin_dashboard.php");
        exit;
    } else {
        // Thêm logic kiểm tra lỗi chi tiết
        if (!$user) {
            $error = "Không tìm thấy tài khoản này.";
        } elseif (!password_verify($password, $user['password'])) {
            $error = "Mật khẩu sai.";
        }
    }}
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
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
        /* Đổi con trỏ chuột thành biểu tượng "pointer" khi di chuột vào nút */
button {
    cursor: pointer; /* Biểu tượng con trỏ hình bàn tay */
}

/* Đổi con trỏ chuột thành biểu tượng "move" khi di chuột vào một khối div */
.moveable {
    cursor: move; /* Biểu tượng con trỏ di chuyển */
}

/* Đổi con trỏ chuột thành biểu tượng "not-allowed" khi không cho phép tương tác */
.disabled {
    cursor: not-allowed; /* Biểu tượng con trỏ bị cấm */
}

/* Đổi con trỏ chuột thành biểu tượng "help" khi di chuột vào phần tử có hướng dẫn */
.help {
    cursor: help; /* Biểu tượng con trỏ dấu chấm hỏi */
}
/* Đổi con trỏ chuột thành biểu tượng hình bàn tay khi di chuột vào overlay */
.overlay {
    cursor: pointer;
}

/* Đổi con trỏ chuột thành biểu tượng mặc định khi di chuột vào popup */
.popup {
    cursor: default;
}
    </style>
</head>
<body>
    <h1>Đăng nhập tài khoản quản trị</h1>
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
