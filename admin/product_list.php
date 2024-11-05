<?php
include '../includes/database.php';
include 'header1.php'; // Bao gồm header

// Lấy dữ liệu sản phẩm
$stmt = $pdo->query("SELECT * FROM SanPham");
$products = $stmt->fetchAll();
?>
<?php
include '../includes/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Kiểm tra nếu các trường cần thiết có dữ liệu
    $product_name = isset($_POST['product_name']) ? trim($_POST['product_name']) : null;
    $price = isset($_POST['price']) ? trim($_POST['price']) : null;
    $image_url = isset($_POST['image_url']) ? trim($_POST['image_url']) : '';

    if ($product_name && $price) { // Chỉ thực hiện nếu product_name và price có giá trị
        $stmt = $pdo->prepare("INSERT INTO SanPham (product_name, price, image_url) VALUES (?, ?, ?)");
        $stmt->execute([$product_name, $price, $image_url]);
        header("Location: product_list.php");
        exit();
    } else {
        echo "Vui lòng nhập đầy đủ thông tin sản phẩm.";
    }
}
?>
<?php
include '../includes/database.php';

if (isset($_POST['delete_product_id'])) {
    $product_id = $_POST['delete_product_id'];
    $stmt = $pdo->prepare("DELETE FROM SanPham WHERE product_id = ?");
    $stmt->execute([$product_id]);
    header("Location: product_list.php");
    exit();
}
?>
<main>

    <h2>Danh sách Sản phẩm</h2>
    <button onclick="openAddPopup()" class="add-product-btn">Thêm sản phẩm mới</button>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Ảnh</th>
            <th>Hành động</th>
        </tr>
        <?php foreach ($products as $product) { ?>
            <tr>
                <td><?php echo $product['product_id']; ?></td>
                <td><?php echo $product['product_name']; ?></td>
                <td><?php echo number_format($product['price'], 0, ',', '.'); ?> VNĐ</td>
                <td><img src="../images/<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['product_name']); ?>"></td>
                <td>
                    <button onclick="openPopup(<?php echo $product['product_id']; ?>, '<?php echo addslashes($product['product_name']); ?>', <?php echo $product['price']; ?>, '<?php echo addslashes($product['image_url']); ?>')" class="edit-button">Sửa</button> |
                    <a href="javascript:void(0);" onclick="openDeletePopup(<?php echo $product['product_id']; ?>)" class="delete-button">Xóa</a>
                    </td>
            </tr>
        <?php } ?>
    </table>

<!-- Overlay and Popup for Editing Product -->
<div class="overlay" id="editOverlay" onclick="closeEditPopup()"></div>
<div class="popup" id="editPopup">
    <h2>Chỉnh sửa sản phẩm</h2>
    <form action="edit_product.php" method="post">
        <input type="hidden" name="product_id" id="edit_product_id">
        Tên sản phẩm: <input type="text" name="product_name" id="edit_product_name" required><br><br>
        Giá: <input type="number" name="price" id="edit_price" required><br><br>
        URL Ảnh: <input type="text" name="image_url" id="edit_image_url"><br><br>
        <button type="submit">Cập nhật sản phẩm</button>
        <button type="button" onclick="closeEditPopup()">Đóng</button>
    </form>
</div>
    <script src="js/product.js"></script>
<!-- Overlay and Popup for Deleting Product -->
<div class="overlay" id="deleteOverlay" onclick="closeDeletePopup()"></div>
<div class="popup" id="deletePopup">
    <h2>Xác nhận xóa sản phẩm</h2>
    <p>Bạn có chắc chắn muốn xóa sản phẩm này không?</p>
    <form method="post" action="">
        <input type="hidden" name="delete_product_id" id="delete_product_id">
        <button type="submit">Xóa</button>
        <button type="button" onclick="closeDeletePopup()">Hủy</button>
    </form>
</div><!-- Button to open Add Product Popup -->
<button onclick="openAddPopup()" class="add-product-btn">Thêm sản phẩm mới</button>

<!-- Overlay and Popup for Adding Product -->
<div class="overlay" id="addOverlay" onclick="closeAddPopup()"></div>
<div class="popup" id="addPopup">
    <h2>Thêm sản phẩm mới</h2>
    <form action="" method="post">
        Tên sản phẩm: <input type="text" name="product_name" required><br><br>
        Giá: <input type="number" name="price" required><br><br>
        URL Ảnh: <input type="text" name="image_url"><br><br>
        <button type="submit">Thêm sản phẩm</button>
        <button type="button" onclick="closeAddPopup()">Đóng</button>
    </form>
</div>
</main>
<?php include 'footer1.php'; // Bao gồm footer ?>