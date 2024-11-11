<?php
session_start(); // Khởi động session để sử dụng thông tin đăng nhập
?>

<?php include 'includes/header.php'; ?>

<main>
    <h2>Trang chính</h2>
    <p>Đây là trang chính của ứng dụng.</p>
    
</main>
<?php include 'product_list.php'; ?>
<?php include 'includes/footer.php'; ?>
