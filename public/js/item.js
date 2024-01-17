// Function to open the View Modal
function openViewModal(item) {
    var itemName = item.parentNode.parentNode.cells[0].innerText;
    var itemStock = item.parentNode.parentNode.cells[1].innerText;
    var itemBuyPrice = item.parentNode.parentNode.cells[2].innerText;
    var itemSellPrice = item.parentNode.parentNode.cells[3].innerText;

    var viewContent = document.getElementById("viewContent");
    viewContent.innerHTML = `
        <p><strong>Name:</strong> ${itemName}</p>
        <p><strong>Stock:</strong> ${itemStock}</p>
        <p><strong>Buy Price:</strong> ${itemBuyPrice}</p>
        <p><strong>Sell Price:</strong> ${itemSellPrice}</p>
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
        <label for="editName">Name:</label>
        <input type="text" id="editName" value="${itemName}">

        <label for="editStock">Stock:</label>
        <input type="text" id="editStock" value="${itemStock}">

        <label for="editBuyPrice">Buy Price:</label>
        <input type="text" id="editBuyPrice" value="${itemBuyPrice}">

        <label for="editSellPrice">Sell Price:</label>
        <input type="text" id="editSellPrice" value="${itemSellPrice}">

        <button onclick="confirmEdit()">Save Changes</button>
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
