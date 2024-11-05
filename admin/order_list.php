<?php
include '../includes/database.php';
include 'header1.php'; // Bao gồm header


// Lấy dữ liệu đơn hàng
// Fetch all orders
$stmt = $pdo->query("SELECT * FROM DonHang");
$orders = $stmt->fetchAll();

// Fetch all products
$productStmt = $pdo->query("SELECT * FROM SanPham");
$products = $productStmt->fetchAll();?>

<main>
    <h2>Danh Sách Đơn Hàng</h2>
    <button onclick="openAddOrderPopup()" class="add-order-btn">Thêm đơn hàng mới</button>

    <table>
        <tr>
            <th>Mã đơn hàng</th>
            <th>Tên khách hàng</th>
            <th>Số điện thoại</th>
            <th>Tổng số tiền</th>
            <th>Hành động</th>
        </tr>
        <?php foreach ($orders as $order) { ?>
            <tr>
                <td><?php echo $order['order_id']; ?></td>
                <td><?php echo $order['customer_name']; ?></td>
                <td><?php echo $order['customer_contact']; ?></td>
                <td><?php echo number_format($order['total_amount'], 0, ',', '.'); ?> VND</td>
                <td>
                    <button onclick="openEditOrderPopup(<?php echo $order['order_id']; ?>, '<?php echo addslashes($order['customer_name']); ?>', '<?php echo addslashes($order['customer_contact']); ?>', <?php echo $order['total_amount']; ?>)" class="edit-button">Sửa</button>
                    <button onclick="openDeletePopup(<?php echo $order['order_id']; ?>)" class="delete-button">Xóa</button>
                </td>
            </tr>
        <?php } ?>
    </table>

    <!-- Add Order Popup -->
    <div class="overlay" id="addOrderOverlay" onclick="closeAddOrderPopup()"></div>
    <div class="popup" id="addOrderPopup">
        <h2>Thêm đơn hàng mới</h2>
        <form action="add_order.php" method="post">
            Tên khách hàng: <input type="text" name="customer_name" required><br><br>
            Số điện thoại: <input type="text" name="customer_contact" required><br><br>
            Sản phẩm:
            <select name="product_id" required>
                <?php foreach ($products as $product) { ?>
                    <option value="<?php echo $product['product_id']; ?>"><?php echo $product['product_name']; ?></option>
                <?php } ?>
            </select><br><br>
            Số lượng: <input type="number" name="quantity" required><br><br>
            Tổng số tiền: <input type="number" name="total_amount" required><br><br>
            <button type="submit">Thêm đơn hàng</button>
            <button type="button" onclick="closeAddOrderPopup()">Đóng</button>
        </form>
    </div>

    <!-- Edit Order Popup -->
    <div class="overlay" id="editOrderOverlay" onclick="closeEditOrderPopup()"></div>
    <div class="popup" id="editOrderPopup">
        <h2>Sửa đơn hàng</h2>
        <form action="edit_order.php" method="post">
            <input type="hidden" name="order_id" id="edit_order_id">
            Tên khách hàng: <input type="text" name="customer_name" id="edit_customer_name" required><br><br>
            Số điện thoại: <input type="text" name="customer_contact" id="edit_customer_contact" required><br><br>
            Sản phẩm:
            <select name="product_id" id="edit_product_id" required>
                <?php foreach ($products as $product) { ?>
                    <option value="<?php echo $product['product_id']; ?>"><?php echo $product['product_name']; ?></option>
                <?php } ?>
            </select><br><br>
            Số lượng: <input type="number" name="quantity" id="edit_quantity" required><br><br>
            Tổng số tiền: <input type="number" name="total_amount" id="edit_total_amount" required><br><br>
            <button type="submit">Cập nhật đơn hàng</button>
            <button type="button" onclick="closeEditOrderPopup()">Đóng</button>
        </form>
    </div>

    <!-- Delete Confirmation Popup -->
    <div class="overlay" id="deleteOverlay" onclick="closeDeletePopup()"></div>
    <div class="popup" id="deletePopup">
        <h2>Xác nhận xóa</h2>
        <p>Bạn có muốn xóa đơn hàng này</p>
        <form method="post" action="delete_order.php">
            <input type="hidden" name="delete_order_id" id="delete_order_id">
            <button type="submit">Xóa</button>
            <button type="button" onclick="closeDeletePopup()">Không</button>
        </form>
    </div>
    <button onclick="openAddOrderPopup()" class="add-order-btn">Thêm đơn hàng mới</button>
</main>
<script src="js/order.js"></script>

<?php include 'footer1.php'; // Bao gồm footer ?>