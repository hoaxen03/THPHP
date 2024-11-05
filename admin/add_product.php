<?php
include '../includes/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];

    $stmt = $pdo->prepare("INSERT INTO SanPham (product_name, price, image_url) VALUES (?, ?, ?)");
    $stmt->execute([$product_name, $price, $image_url]);
    header("Location: product_list.php");
}
?>

<form action="add_product.php" method="post">
    Tên sản phẩm: <input type="text" name="product_name" required><br>
    Giá: <input type="number" name="price" required><br>
    URL Ảnh: <input type="text" name="image_url"><br>
    <button type="submit">Thêm sản phẩm</button>
</form>

