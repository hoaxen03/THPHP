function openPopup(id, name, price, imageUrl, categoryName) {
    document.getElementById('edit_product_id').value = id;
    document.getElementById('edit_product_name').value = name;
    document.getElementById('edit_price').value = price;
    document.getElementById('edit_category_name').value = categoryName;

    if (imageUrl) {
        document.getElementById('edit_image_url_text').textContent = imageUrl;
    }

    document.getElementById('editPopup').style.display = 'block';
    document.getElementById('editOverlay').style.display = 'block';
}



function closePopup() {
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('popup').style.display = 'none';
}
function openAddPopup() {
    document.getElementById('addPopup').style.display = 'block';
    document.getElementById('addOverlay').style.display = 'block';
}
function closeAddPopup() {
    document.getElementById('addPopup').style.display = 'none';
    document.getElementById('addOverlay').style.display = 'none';
    // Reset lại input file khi đóng popup
    document.getElementById('edit_image_url').value = ''; // Clear value khi đóng
}

function openEditPopup(id, name, price, imageUrl) {
    document.getElementById("editOverlay").style.display = "block";
    document.getElementById("editPopup").style.display = "block";
    document.getElementById("edit_product_id").value = id;
    document.getElementById("edit_product_name").value = name;
    document.getElementById("edit_price").value = price;
    document.getElementById("edit_image_url").value = imageUrl;
}

function closeEditPopup() {
    document.getElementById("editOverlay").style.display = "none";
    document.getElementById("editPopup").style.display = "none";
}

// Mở popup xác nhận xóa
function openDeletePopup(productId) {
    document.getElementById('delete_product_id').value = productId; // Gán product_id vào input ẩn
    document.getElementById('deleteOverlay').style.display = 'block'; // Hiển thị overlay
    document.getElementById('deletePopup').style.display = 'block'; // Hiển thị popup
}

// Đóng popup xác nhận xóa
function closeDeletePopup() {
    document.getElementById('deleteOverlay').style.display = 'none'; // Ẩn overlay
    document.getElementById('deletePopup').style.display = 'none'; // Ẩn popup
}// Hàm xử lý chọn ảnh
function handleFileInputChange(event) {
    var input = event.target;
    if (input.files && input.files[0]) {
        // Chỉ hiển thị tên file đã chọn
        console.log("Selected file: " + input.files[0].name);
    }
}

// Gắn sự kiện khi chọn file
document.getElementById('edit_image_url').addEventListener('change', handleFileInputChange);
function previewImage() {
    var file = document.getElementById('product_image').files[0];
    var reader = new FileReader();

    reader.onloadend = function() {
        document.getElementById('image_preview').src = reader.result;
        document.getElementById('image_preview').style.display = 'block';
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        document.getElementById('image_preview').src = "";
        document.getElementById('image_preview').style.display = 'none';
    }
}
// Lắng nghe sự kiện khi người dùng chọn ảnh
document.getElementById('edit_image_url').addEventListener('change', function(event) {
    const fileName = event.target.files[0] ? event.target.files[0].name : 'Chưa chọn ảnh';
    document.getElementById('edit_image_url_text').textContent = fileName;
});
function updateFileName() {
    const fileInput = document.getElementById("add_image_url");
    const fileNameText = document.getElementById("add_image_url_text");
    
    if (fileInput.files.length > 0) {
        fileNameText.textContent = fileInput.files[0].name;
    } else {
        fileNameText.textContent = "Chưa chọn ảnh";
    }
}
    // Hàm cập nhật tên tệp đã chọn trong form thêm sản phẩm
    function updateAddFileName() {
        const fileInput = document.getElementById("add_image_url");
        const fileNameText = document.getElementById("add_image_url_text");
        
        if (fileInput.files.length > 0) {
            fileNameText.textContent = fileInput.files[0].name;
        } else {
            fileNameText.textContent = "Chưa chọn ảnh";
        }
    }

    // Hàm mở popup thêm sản phẩm
    function openAddPopup() {
        document.getElementById('addPopup').style.display = 'block';
        document.getElementById('addOverlay').style.display = 'block';
    }

    // Hàm đóng popup thêm sản phẩm
    function closeAddPopup() {
        document.getElementById('addPopup').style.display = 'none';
        document.getElementById('addOverlay').style.display = 'none';
        // Reset lại input file khi đóng popup
        document.getElementById('add_image_url').value = ''; // Clear value khi đóng
        document.getElementById('add_image_url_text').textContent = 'Chưa chọn ảnh'; // Reset text
    }

    // Hàm mở popup chỉnh sửa sản phẩm (nếu cần)
    function openEditPopup(id, name, price, imageUrl, categoryName) {
        document.getElementById('edit_product_id').value = id;
        document.getElementById('edit_product_name').value = name;
        document.getElementById('edit_price').value = price;
        document.getElementById('edit_category_name').value = categoryName;
        
        if (imageUrl) {
            document.getElementById('edit_image_url_text').textContent = imageUrl;
        } else {
            document.getElementById('edit_image_url_text').textContent = 'Chưa chọn ảnh';
        }
        
        document.getElementById('editPopup').style.display = 'block';
        document.getElementById('editOverlay').style.display = 'block';
    }

    // Hàm đóng popup chỉnh sửa sản phẩm (nếu cần)
    function closeEditPopup() {
        document.getElementById('editPopup').style.display = 'none';
        document.getElementById('editOverlay').style.display = 'none';
        document.getElementById('edit_image_url').value = ''; // Clear value khi đóng
        document.getElementById('edit_image_url_text').textContent = 'Chưa chọn ảnh'; // Reset text
    }

    // Hàm mở popup xóa sản phẩm (nếu cần)
    function openDeletePopup(id) {
        document.getElementById("deleteOverlay").style.display = "block";
        document.getElementById("deletePopup").style.display = "block";
        document.getElementById("delete_product_id").value = id;
    }

    // Hàm đóng popup xóa sản phẩm (nếu cần)
    function closeDeletePopup() {
        document.getElementById("deleteOverlay").style.display = "none";
        document.getElementById("deletePopup").style.display = "none";
    }
    // Hàm mở popup xóa sản phẩm
    function openDeletePopup(productId) {
        document.getElementById('delete_product_id').value = productId;
        document.getElementById('deleteOverlay').style.display = 'block';
        document.getElementById('deletePopup').style.display = 'block';
    }

    // Hàm đóng popup xóa sản phẩm
    function closeDeletePopup() {
        document.getElementById('deleteOverlay').style.display = 'none';
        document.getElementById('deletePopup').style.display = 'none';
    }

