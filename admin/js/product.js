function openPopup(id, name, price, imageUrl) {
    document.getElementById('edit_product_id').value = id;
    document.getElementById('edit_product_name').value = name;
    document.getElementById('edit_price').value = price;
    document.getElementById('edit_image_url').value = imageUrl;

    document.getElementById('overlay').style.display = 'block';
    document.getElementById('popup').style.display = 'block';
}

function closePopup() {
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('popup').style.display = 'none';
}
function openAddPopup() {
    document.getElementById("addOverlay").style.display = "block";
    document.getElementById("addPopup").style.display = "block";
}

function closeAddPopup() {
    document.getElementById("addOverlay").style.display = "none";
    document.getElementById("addPopup").style.display = "none";
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

function openDeletePopup(id) {
    document.getElementById("deleteOverlay").style.display = "block";
    document.getElementById("deletePopup").style.display = "block";
    document.getElementById("delete_product_id").value = id;
}

function closeDeletePopup() {
    document.getElementById("deleteOverlay").style.display = "none";
    document.getElementById("deletePopup").style.display = "none";
}
