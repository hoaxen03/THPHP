<?php
include '../includes/database.php';

// Lấy thông tin đơn hàng để hiển thị khi chỉnh sửa
if (isset($_GET['id'])) {
    $order_id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM DonHang WHERE order_id = ?");
    $stmt->execute([$order_id]);
    $order = $stmt->fetch();
}

// Lấy danh sách sản phẩm để admin chọn khi chỉnh sửa đơn hàng
$stmt = $pdo->query("SELECT * FROM SanPham");
$products = $stmt->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_id = $_POST['order_id'];
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $customer_name = $_POST['customer_name'];
    $customer_contact = $_POST['customer_contact'];
    $total_amount = $_POST['total_amount'];

    // Cập nhật thông tin đơn hàng trong bảng DonHang
    $stmt = $pdo->prepare("UPDATE DonHang SET product_id = ?, quantity = ?, customer_name = ?, customer_contact = ?, total_amount = ? WHERE order_id = ?");
    $stmt->execute([$product_id, $quantity, $customer_name, $customer_contact, $total_amount, $order_id]);

    header("Location: order_list.php"); // Chuyển hướng về danh sách đơn hàng sau khi cập nhật thành công
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sửa Đơn hàng</title>
</head>
<body>
    <h2>Sửa Đơn hàng</h2>
    <form action="edit_order.php" method="post">
        <input type="hidden" name="order_id" value="<?php echo $order['order_id']; ?>">
        Tên khách hàng: <input type="text" name="customer_name" value="<?php echo $order['customer_name']; ?>" required><br>
        Liên hệ khách hàng: <input type="text" name="customer_contact" value="<?php echo $order['customer_contact']; ?>" required><br>
        Sản phẩm: 
        <select name="product_id" required>
            <?php foreach ($products as $product) { ?>
                <option value="<?php echo $product['product_id']; ?>" <?php echo ($product['product_id'] == $order['product_id']) ? 'selected' : ''; ?>>
                    <?php echo $product['product_name']; ?>
                </option>
            <?php } ?>
        </select><br>
        Số lượng: <input type="number" name="quantity" value="<?php echo $order['quantity']; ?>" required><br>
        Tổng tiền: <input type="number" name="total_amount" value="<?php echo $order['total_amount']; ?>" required><br>
        <button type="submit">Cập nhật Đơn hàng</button>
    </form>
</body>
</html>
