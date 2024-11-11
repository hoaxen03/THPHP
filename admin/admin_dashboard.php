<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}
?>
<?php
include '../includes/database.php';

// Lấy dữ liệu thống kê số lượng sản phẩm theo danh mục
$stmt = $pdo->query("SELECT category_name, COUNT(*) as product_count FROM SanPham GROUP BY category_name");
$categories = [];
$productCounts = [];

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $categories[] = $row['category_name'];
    $productCounts[] = $row['product_count'];
}
?>
<?php
// Lấy dữ liệu thống kê số lượng đơn hàng theo ngày
$stmt = $pdo->query("SELECT DATE(order_date) as order_date, COUNT(*) as order_count FROM DonHang GROUP BY DATE(order_date)");
$orderDates = [];
$orderCounts = [];

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $orderDates[] = $row['order_date'];
    $orderCounts[] = $row['order_count'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css"> 

</head>
<body>
    <h1>Quản lý Admin</h1>
    <header>
    <nav>
        <ul>
            <li><a href="product_list.php">Quản lý Sản phẩm</a></li>
            <li><a href="order_list.php">Quản lý Đơn hàng</a></li>
            <li><a href="user_list.php">Quản lý Tài khoản</a></li>
            <li><a href="logout.php">Đăng xuất</a></li>
            <li><a href="../">Thoát quản trị</a></li>
        </ul>
        <p class="admin-greeting">Xin chào, <?php echo htmlspecialchars($_SESSION['admin_name']); ?>!</p>
    </nav>
    </header>
    <main>

    <!-- Biểu đồ số lượng sản phẩm theo danh mục -->
    <h3>Số lượng sản phẩm theo danh mục</h3>
    <canvas id="productChart" width="100" height="50"></canvas>

    <!-- Biểu đồ số lượng đơn hàng theo ngày -->
    <h3>Số lượng đơn hàng theo ngày</h3>
    <canvas id="orderChart" width="100" height="50"></canvas>

    <script>
        // Dữ liệu biểu đồ số lượng sản phẩm theo danh mục
        const productData = {
            labels: <?php echo json_encode($categories); ?>,
            datasets: [{
                label: 'Số lượng sản phẩm',
                data: <?php echo json_encode($productCounts); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };

        // Cấu hình và tạo biểu đồ sản phẩm
        const productConfig = {
            type: 'bar',
            data: productData,
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };
        new Chart(document.getElementById('productChart'), productConfig);

        // Dữ liệu biểu đồ số lượng đơn hàng theo ngày
        const orderData = {
            labels: <?php echo json_encode($orderDates); ?>,
            datasets: [{
                label: 'Số lượng đơn hàng',
                data: <?php echo json_encode($orderCounts); ?>,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        };

        // Cấu hình và tạo biểu đồ đơn hàng
        const orderConfig = {
            type: 'line',
            data: orderData,
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };
        new Chart(document.getElementById('orderChart'), orderConfig);
    </script>
    </main>
</body>
</html>

