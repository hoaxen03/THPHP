<?php
// add_product.php

// Kết nối đến cơ sở dữ liệu
include '../includes/database.php'; // Đảm bảo file này khởi tạo biến $pdo đúng cách

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy thông tin từ form
    $product_name = isset($_POST['product_name']) ? trim($_POST['product_name']) : null;
    $price = isset($_POST['price']) ? trim($_POST['price']) : null;
    $category_name = isset($_POST['category_name']) ? trim($_POST['category_name']) : null;

    // Kiểm tra nếu có file ảnh được tải lên
    $image_url = null;
    if (isset($_FILES['image_url']) && $_FILES['image_url']['error'] == 0) {
        // Lấy thông tin ảnh
        $image_tmp = $_FILES['image_url']['tmp_name'];
        $image_name = $_FILES['image_url']['name'];
        $image_type = $_FILES['image_url']['type'];

        // Đảm bảo ảnh có định dạng hợp lệ (JPEG, PNG, GIF, v.v.)
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg'];
        if (in_array($image_type, $allowed_types)) {
            // Đổi tên ảnh để tránh trùng lặp và lưu vào thư mục images
            $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
            $image_name = uniqid('product_', true) . '.' . strtolower($image_extension);
            $image_path = '../images/' . $image_name;

            // Kiểm tra xem thư mục images có tồn tại không, nếu không thì tạo
            if (!is_dir('../images/')) {
                mkdir('../images/', 0755, true);
            }

            // Di chuyển file từ tạm thời đến thư mục mục tiêu
            if (move_uploaded_file($image_tmp, $image_path)) {
                // Lưu tên file ảnh vào biến để lưu vào cơ sở dữ liệu
                $image_url = $image_name;
            } else {
                echo "Không thể tải ảnh lên. Vui lòng thử lại.";
                exit();
            }
        } else {
            echo "Chỉ chấp nhận định dạng ảnh JPG, PNG, GIF.";
            exit();
        }
    }

    // Kiểm tra nếu các trường cần thiết có dữ liệu
    if ($product_name && $price && $category_name) { 
        try {
            // Thêm sản phẩm mới vào cơ sở dữ liệu
            $stmt = $pdo->prepare("INSERT INTO SanPham (product_name, price, image_url, category_name) VALUES (?, ?, ?, ?)");
            $stmt->execute([$product_name, $price, $image_url, $category_name]);

            header("Location: product_list.php");
            exit();
        } catch (PDOException $e) {
            echo "Lỗi khi thêm sản phẩm: " . $e->getMessage();
            exit();
        }
    } else {
        echo "Vui lòng nhập đầy đủ thông tin sản phẩm.";
        exit();
    }
}
?>
