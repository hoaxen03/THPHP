<?php
include '../includes/database.php';

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM SanPham WHERE product_id = ?");
    $stmt->execute([$product_id]);
    $product = $stmt->fetch();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];

    $stmt = $pdo->prepare("UPDATE SanPham SET product_name = ?, price = ?, image_url = ? WHERE product_id = ?");
    $stmt->execute([$product_name, $price, $image_url, $product_id]);
    header("Location: product_list.php");
}
?>

<form action="edit_product.php" method="post">
    <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
    Tên sản phẩm: <input type="text" name="product_name" value="<?php echo $product['product_name']; ?>" required><br>
    Giá: <input type="number" name="price" value="<?php echo $product['price']; ?>" required><br>
    URL Ảnh: <input type="text" name="image_url" value="<?php echo $product['image_url']; ?>"><br>
    <button type="submit">Cập nhật sản phẩm</button>
</form>
