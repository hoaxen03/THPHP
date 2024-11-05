<?php
session_start(); // Khởi động session để sử dụng thông tin đăng nhập
?>

<?php include 'includes/header.php'; ?>

<main>
    <h2>Trang chính</h2>
    <p>Đây là trang chính của ứng dụng.</p>
    
    <?php if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin'): ?>
        <h3>Chức năng cho quản trị viên</h3>
        <p>Bạn có thể quản lý sản phẩm, đơn hàng và tài khoản từ đây.</p>
        <a href="admin/admin_dashboard.php">Vào trang quản trị</a>
    <?php else: ?>
        <h3>Chức năng cho khách hàng</h3>
        <p>Khách hàng có thể xem danh sách sản phẩm và thực hiện mua hàng.</p>
        <a href="product_list.php">Xem danh sách sản phẩm</a>
    <?php endif; ?>
</main>

<?php include 'includes/footer.php'; ?>
