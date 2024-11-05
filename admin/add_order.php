<?php
include '../includes/database.php';

// Lấy danh sách sản phẩm để admin có thể chọn từ dropdown
$stmt = $pdo->query("SELECT * FROM SanPham");
$products = $stmt->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $customer_name = $_POST['customer_name'];
    $customer_contact = $_POST['customer_contact'];
    $total_amount = $_POST['total_amount'];

    // Chèn đơn hàng mới vào bảng DonHang
    $stmt = $pdo->prepare("INSERT INTO DonHang (product_id, quantity, customer_name, customer_contact, total_amount) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$product_id, $quantity, $customer_name, $customer_contact, $total_amount]);

    header("Location: order_list.php"); // Chuyển hướng về danh sách đơn hàng sau khi thêm thành công
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thêm Đơn hàng</title>
</head>
<body>
    <h2>Thêm Đơn hàng mới</h2>
    <form action="add_order.php" method="post">
        Tên khách hàng: <input type="text" name="customer_name" required><br>
        Liên hệ khách hàng: <input type="text" name="customer_contact" required><br>
        Sản phẩm: 
        <select name="product_id" required>
            <?php foreach ($products as $product) { ?>
                <option value="<?php echo $product['product_id']; ?>">
                    <?php echo $product['product_name']; ?>
                </option>
            <?php } ?>
        </select><br>
        Số lượng: <input type="number" name="quantity" required><br>
        Tổng tiền: <input type="number" name="total_amount" required><br>
        <button type="submit">Thêm Đơn hàng</button>
    </form>
</body>
</html>
