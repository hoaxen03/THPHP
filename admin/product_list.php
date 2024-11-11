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
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif','image/jpg'];
        if (in_array($image_type, $allowed_types)) {
            // Đổi tên ảnh để tránh trùng lặp và lưu vào thư mục images
            $image_name = uniqid('product_', true) . '.' . pathinfo($image_name, PATHINFO_EXTENSION);
            $image_path = '../images/' . $image_name;

            // Di chuyển file từ tạm thời đến thư mục mục tiêu
            move_uploaded_file($image_tmp, $image_path);

            // Lưu đường dẫn ảnh vào biến
            $image_url = $image_name;
            if (move_uploaded_file($image_tmp, $image_path)) {
    $image_url = $image_name;
} else {
    echo "Lỗi khi tải ảnh lên.";
    exit;
}

        } else {
            echo "Chỉ chấp nhận định dạng ảnh JPG, PNG, GIF.";
            exit;
        }
    }

    // Kiểm tra nếu các trường cần thiết có dữ liệu
    if ($product_name && $price && $category_name) { 
        // Thêm sản phẩm mới vào cơ sở dữ liệu
        $stmt = $pdo->prepare("INSERT INTO SanPham (product_id,product_name, price, image_url, category_name) VALUES (?,?, ?, ?, ?)");
        $stmt->execute([$product_id,$product_name, $price, $image_url, $category_name]);
        header("Location: product_list.php");
        exit();
    } else {
        echo "Vui lòng nhập đầy đủ thông tin sản phẩm.";
    }
}
?>
<?php
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
            if (move_uploaded_file($image_tmp, $image_path)) {
                $image_url = $image_name;
            } else {
                echo "Lỗi khi tải ảnh lên.";
                exit;
            }
            
        }
    }

    // Cập nhật sản phẩm
    $stmt = $pdo->prepare("UPDATE SanPham SET product_name = ?, price = ?, image_url = ?, category_name = ? WHERE product_id = ?");
    $stmt->execute([$product_name, $price, $image_url, $category_name, $product_id]);
    header("Location: product_list.php");
    exit();
}

?>
<?php
if (isset($_POST['delete_product_id'])) {
    $product_id = $_POST['delete_product_id'];

    // Kiểm tra xem sản phẩm có đang tham chiếu trong các bảng khác (ví dụ: đơn hàng) không
    $query = "SELECT COUNT(*) FROM donhang WHERE product_id = :product_id";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['product_id' => $product_id]);
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        echo "Không thể xóa sản phẩm vì có đơn hàng đang tham chiếu.";
    } else {
        // Xóa sản phẩm từ bảng sanpham
        $deleteQuery = "DELETE FROM sanpham WHERE product_id = :product_id";
        $deleteStmt = $pdo->prepare($deleteQuery);
        $deleteStmt->execute(['product_id' => $product_id]);

        echo "Sản phẩm đã được xóa thành công.";
    }
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
            <th>Danh mục</th>
            <th>Hành động</th>
        </tr>
        <?php foreach ($products as $product) { ?>
            <tr>
                <td><?php echo $product['product_id']; ?></td>
                <td><?php echo $product['product_name']; ?></td>
                <td><?php echo number_format($product['price'], 0, ',', '.'); ?> VNĐ</td>
                <td><img src="../images/<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['product_name']); ?>"></td>
                <td><?php echo $product['category_name']; ?></td>
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
    <form>
        Tên sản phẩm: <input type="text" name="product_name" id="edit_product_name" required><br><br>
        Giá: <input type="number" name="price" id="edit_price" required><br><br>
        Danh mục: <input type="text" name="category_name" id="edit_category_name" required><br><br>
        
        <!-- Hiển thị URL ảnh hiện tại -->
        URL Ảnh:<label for="edit_image_url" class="custom-file-upload">Chọn Ảnh</label>
                <input type="file" name="image_url" id="edit_image_url" style="display: none;" />
                <span id="edit_image_url_text"></span> <br><br>
        
        <button type="submit" class="submit-btn">Lưu thay đổi</button>
        <button type="button" class="close-btn" onclick="closeEditPopup()">Đóng</button>
    </form>
</div>

<!-- Overlay and Popup for Deleting Product -->
<div class="overlay" id="deleteOverlay" onclick="closeDeletePopup()"></div>
<div class="popup" id="deletePopup">
    <h2>Xác nhận xóa sản phẩm</h2>
    <p>Bạn có chắc chắn muốn xóa sản phẩm này không?</p>
    <form method="post" action="delete_product.php">
        <input type="hidden" name="delete_product_id" id="delete_product_id">
        <button type="submit">Xóa</button>
        <button type="button" onclick="closeDeletePopup()">Hủy</button>
    </form>
</div>

<!-- Button to open Add Product Popup -->
<button onclick="openAddPopup()" class="add-product-btn">Thêm sản phẩm mới</button>

<!-- Overlay and Popup for Adding Product -->
<div class="overlay" id="addOverlay" onclick="closeAddPopup()"></div>
<div class="popup" id="addPopup">
    <h2>Thêm sản phẩm mới</h2>
    <form action="add_product.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="product_id" id="add_product_id">
        
        <label for="add_product_name">Tên sản phẩm:</label>
        <input type="text" name="product_name" id="add_product_name" required><br><br>
        
        <label for="add_price">Giá:</label>
        <input type="number" name="price" id="add_price" required><br><br>
        
        <label for="add_category_name">Danh mục:</label>
        <input type="text" name="category_name" id="add_category_name" required><br><br>
        
        <!-- Chọn ảnh -->
        <label for="add_image_url" class="custom-file-upload">Chọn Ảnh</label>
        <input type="file" name="image_url" id="add_image_url" style="display: none;" onchange="updateAddFileName()" />
        <span id="add_image_url_text">Chưa chọn ảnh</span><br><br>
        
        <button type="submit" class="submit-btn">Thêm sản phẩm</button>
        <button type="button" class="close-btn" onclick="closeAddPopup()">Đóng</button>
    </form>
</div>
</main>
<script src="js/product.js"></script>

<?php include 'footer1.php'; // Bao gồm footer ?>