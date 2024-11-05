        // JavaScript functions to handle opening and closing of popups
        function openAddPopup() {
            document.getElementById('addOverlay').style.display = 'block';
            document.getElementById('addPopup').style.display = 'block';
        }

        function closeAddPopup() {
            document.getElementById('addOverlay').style.display = 'none';
            document.getElementById('addPopup').style.display = 'none';
        }

        function openEditPopup(userId, username, email) {
            document.getElementById('edit_user_id').value = userId;
            document.getElementById('edit_username').value = username;
            document.getElementById('edit_email').value = email;
            document.getElementById('editOverlay').style.display = 'block';
            document.getElementById('editPopup').style.display = 'block';
        }

        function closeEditPopup() {
            document.getElementById('editOverlay').style.display = 'none';
            document.getElementById('editPopup').style.display = 'none';
        }

        function openDeletePopup(userId) {
            document.getElementById('delete_user_id').value = userId; // Gán user_id vào ô ẩn
            document.getElementById('deleteOverlay').style.display = 'block'; // Hiện overlay
            document.getElementById('deletePopup').style.display = 'block'; // Hiện popup
        }
        
        function closeDeletePopup() {
            document.getElementById('deleteOverlay').style.display = 'none'; // Ẩn overlay
            document.getElementById('deletePopup').style.display = 'none'; // Ẩn popup
        }