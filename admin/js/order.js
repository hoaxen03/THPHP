function openEditPopup(orderId, customerName, customerContact, totalAmount) {
    document.getElementById("editOverlay").style.display = "block";
    document.getElementById("editPopup").style.display = "block";
    document.getElementById("edit_order_id").value = orderId;
    document.getElementById("edit_customer_name").value = customerName;
    document.getElementById("edit_customer_contact").value = customerContact;
    document.getElementById("edit_total_amount").value = totalAmount;
}

function closeEditPopup() {
    document.getElementById("editOverlay").style.display = "none";
    document.getElementById("editPopup").style.display = "none";
}

function openDeletePopup(orderId) {
    document.getElementById("deleteOverlay").style.display = "block";
    document.getElementById("deletePopup").style.display = "block";
    document.getElementById("delete_order_id").value = orderId;
}

function closeDeletePopup() {
    document.getElementById("deleteOverlay").style.display = "none";
    document.getElementById("deletePopup").style.display = "none";
}
function openAddOrderPopup() {
    document.getElementById('addOrderOverlay').style.display = 'block';
    document.getElementById('addOrderPopup').style.display = 'block';
}

function closeAddOrderPopup() {
    document.getElementById('addOrderOverlay').style.display = 'none';
    document.getElementById('addOrderPopup').style.display = 'none';
}

function openEditOrderPopup(orderId, customerName, customerContact, totalAmount) {
    document.getElementById('edit_order_id').value = orderId;
    document.getElementById('edit_customer_name').value = customerName;
    document.getElementById('edit_customer_contact').value = customerContact;
    document.getElementById('edit_total_amount').value = totalAmount;
    document.getElementById('editOrderOverlay').style.display = 'block';
    document.getElementById('editOrderPopup').style.display = 'block';
}

function closeEditOrderPopup() {
    document.getElementById('editOrderOverlay').style.display = 'none';
    document.getElementById('editOrderPopup').style.display = 'none';
}

function openDeletePopup(orderId) {
    document.getElementById('delete_order_id').value = orderId;
    document.getElementById('deleteOverlay').style.display = 'block';
    document.getElementById('deletePopup').style.display = 'block';
}

function closeDeletePopup() {
    document.getElementById('deleteOverlay').style.display = 'none';
    document.getElementById('deletePopup').style.display = 'none';
}
