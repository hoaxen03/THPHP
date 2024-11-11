<?php
include '../includes/database.php';
include 'header1.php'; // Bao gồm header

// Truy vấn để lấy danh sách người dùng
$stmt = $pdo->query("SELECT * FROM User");
$users = $stmt->fetchAll();
?>

<main>
    <h2>Danh Sách Quản trị viên</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên người dùng</th>
            <th>Email</th>
            <th>Mật khẩu</th>
            <th>Hành động</th>
        </tr>
        <?php foreach ($users as $user) { ?>
        <tr>
            <td><?php echo $user['user_id']; ?></td>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo htmlspecialchars($user['password']); ?></td> <!-- Hiển thị mật khẩu mã hóa -->
            <td>
                <button onclick="openEditPopup(<?php echo $user['user_id']; ?>, '<?php echo $user['username']; ?>', '<?php echo $user['email']; ?>')" class="edit-button">Sửa</button>
                <button onclick="openDeletePopup(<?php echo $user['user_id']; ?>)" class="delete-button">Xóa</button>
            </td>
        </tr>
        <?php } ?>
    </table>

    <!-- Button to open Add User Popup -->
    <button onclick="openAddPopup()" class="add-user-btn">Thêm người dùng mới</button>

    <!-- Overlay and Popup for Adding User -->
    <div class="overlay" id="addOverlay" onclick="closeAddPopup()"></div>
    <div class="popup" id="addPopup">
        <h2>Thêm người dùng mới</h2>
        <form action="add_user.php" method="post">
            Tên người dùng: <input type="text" name="username" required><br><br>
            Mật khẩu: <input type="password" name="password" required><br><br>
            Email: <input type="email" name="email" required><br><br>
            <button type="submit">Thêm người dùng</button>
            <button type="button" onclick="closeAddPopup()">Đóng</button>
        </form>
    </div>

    <!-- Overlay and Popup for Editing User -->
    <div class="overlay" id="editOverlay" onclick="closeEditPopup()"></div>
    <div class="popup" id="editPopup">
        <h2>Chỉnh sửa người dùng</h2>
        <form action="edit_user.php" method="post">
            <input type="hidden" name="user_id" id="edit_user_id">
            Tên người dùng: <input type="text" name="username" id="edit_username" required><br><br>
            Email: <input type="email" name="email" id="edit_email" required><br><br>
            Mật khẩu mới: <input type="password" name="password" id="edit_password"><br><br>
            <button type="submit">Cập nhật người dùng</button>
            <button type="button" onclick="closeEditPopup()">Đóng</button>
        </form>
    </div>

    <div class="overlay" id="deleteOverlay" onclick="closeDeletePopup()"></div>
<div class="popup" id="deletePopup">
    <h2>Xác nhận xóa người dùng</h2>
    <p>Bạn có chắc chắn muốn xóa người dùng này không?</p>
    <form method="post" action="delete_user.php">
        <input type="hidden" name="user_id" id="delete_user_id">
        <button type="submit">Xóa</button>
        <button type="button" onclick="closeDeletePopup()">Hủy</button>
    </form>
</div>    
<script src="js/user.js"></script> <!-- Tệp JavaScript để xử lý popup -->

</main>
<?php include 'footer1.php'; // Bao gồm footer ?>