// Function to open the Add Customer modal
function openAddModal() {
    document.getElementById('addModal').style.display = 'flex';
}

// Function to close the Add Customer modal
function closeAddModal() {
    document.getElementById('addModal').style.display = 'none';
}

// Function to confirm the addition of a customer (you can customize this based on your needs)
function confirmAdd() {
    // Add your logic here to handle the form submission and add a new customer
    // You may want to use AJAX to send the form data to the server
    // After adding, close the modal
    closeAddModal();
}

// Function to open the View Modal
function openViewModal(item) {
    var itemName = item.parentNode.parentNode.cells[0].innerText;
    var itemStock = item.parentNode.parentNode.cells[1].innerText;
    var itemBuyPrice = item.parentNode.parentNode.cells[2].innerText;
    var itemSellPrice = item.parentNode.parentNode.cells[3].innerText;

    var viewContent = document.getElementById("viewContent");
    viewContent.innerHTML = `
        <p><strong>Nama:</strong> ${itemName}</p>
        <p><strong>Stok:</strong> ${itemStock}</p>
        <p><strong>Harga Beli:</strong> ${itemBuyPrice}</p>
        <p><strong>Harga Jual:</strong> ${itemSellPrice}</p>
    `;

    document.getElementById("viewModal").style.display = "flex";
}

// Function to close the View Modal
function closeViewModal() {
    document.getElementById("viewModal").style.display = "none";
}

// Function to open the Edit Modal
function openEditModal(item) {
    var itemName = item.parentNode.parentNode.cells[0].innerText;
    var itemStock = item.parentNode.parentNode.cells[1].innerText;
    var itemBuyPrice = item.parentNode.parentNode.cells[2].innerText;
    var itemSellPrice = item.parentNode.parentNode.cells[3].innerText;

    var editContent = document.getElementById("editContent");
    editContent.innerHTML = `
        <label for="editName">Nama:</label>
        <input type="text" id="editName" value="${itemName}">

        <label for="editStock">Stok:</label>
        <input type="text" id="editStock" value="${itemStock}">

        <label for="editBuyPrice">Harga Beli:</label>
        <input type="text" id="editBuyPrice" value="${itemBuyPrice}">

        <label for="editSellPrice">Harga Jual:</label>
        <input type="text" id="editSellPrice" value="${itemSellPrice}">
    `;

    document.getElementById("editModal").style.display = "flex";
}

// Function to confirm the Edit action
function confirmEdit() {
    var updatedName = document.getElementById("editName").value;
    var updatedStock = document.getElementById("editStock").value;
    var updatedBuyPrice = document.getElementById("editBuyPrice").value;
    var updatedSellPrice = document.getElementById("editSellPrice").value;

    // Add your logic here to handle the edit action
    // For now, just close the Edit Modal
    closeEditModal();
}

// Function to close the Edit Modal
function closeEditModal() {
    document.getElementById("editModal").style.display = "none";
}

// Function to open the Delete Modal
function openDeleteModal() {
    document.getElementById("deleteModal").style.display = "flex";
}

// Function to close the Delete Modal
function closeDeleteModal() {
    document.getElementById("deleteModal").style.display = "none";
}

// Function to confirm the Delete action
function confirmDelete() {
    // Add your logic here to handle the delete action
    // For now, just close the Delete Modal
    closeDeleteModal();
}
