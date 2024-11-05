<?php
session_start();
include 'database.php';

// Hàm đăng nhập
function login($username, $password) {
    global $db;
    $passwordHash = md5($password);  // Lưu ý: MD5 không an toàn, nên sử dụng các phương pháp mã hóa mạnh hơn như bcrypt
    $query = "SELECT * FROM User WHERE Username = '$username' AND Password = '$passwordHash'";
    $result = $db->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['user'] = $result->fetch_assoc();
        return true;
    } else {
        return false;
    }
}

// Hàm đăng xuất
function logout() {
    session_destroy();
    header("Location: login.php");
}

// Hàm tính tổng tiền của đơn hàng
function calculateTotal($productId, $quantity) {
    global $db;
    $product = $db->query("SELECT Gia FROM SanPham WHERE SanPhamID = $productId")->fetch_assoc();
    return $product['Gia'] * $quantity;
}

// Hàm kiểm tra đăng nhập
function checkLogin() {
    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
        exit();
    }
}

// Hàm lấy tên người dùng
function getUsername() {
    return isset($_SESSION['user']) ? $_SESSION['user']['Username'] : null;
}
?>
