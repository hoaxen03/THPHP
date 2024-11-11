<?php
 include '../includes/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy thông tin từ form
    $product_id = isset($_POST['product_id']) ? $_POST['product_id'] : null;
    $product_name = isset($_POST['product_name']) ? trim($_POST['product_name']) : null;
    $price = isset($_POST['price']) ? trim($_POST['price']) : null;
    $category_name = isset($_POST['category_name']) ? trim($_POST['category_name']) : null;

    // Kiểm tra nếu có file ảnh mới được tải lên
    $image_url = null;
    if (isset($_FILES['image_url']) && $_FILES['image_url']['error'] == 0) {
        // Lấy thông tin ảnh
        $image_tmp = $_FILES['image_url']['tmp_name'];
        $image_name = $_FILES['image_url']['name'];
        $image_type = $_FILES['image_url']['type'];

        // Đảm bảo ảnh có định dạng hợp lệ (JPEG, PNG, GIF, v.v.)
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif','image/jpg'];
        if (in_array($image_type, $allowed_types)) {
            // Đổi tên ảnh và lưu vào thư mục images
            $image_name = uniqid('product_', true) . '.' . pathinfo($image_name, PATHINFO_EXTENSION);
            $image_path = '../images/' . $image_name;
            move_uploaded_file($image_tmp, $image_path);
            $image_url = $image_name;
        }
    }

    // Cập nhật sản phẩm
    $stmt = $pdo->prepare("UPDATE SanPham SET product_name = ?, price = ?, image_url = ?, category_name = ? WHERE product_id = ?");
    $stmt->execute([$product_name, $price, $image_url, $category_name, $product_id]);
    header("Location: product_list.php");
    exit();
}

