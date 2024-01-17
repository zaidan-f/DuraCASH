// Function to open the View Modal
function openViewModal(item) {
    var itemName = item.parentNode.parentNode.cells[0].innerText;
    var itemDescription = item.parentNode.parentNode.cells[1].innerText;
    var itemAddress = item.parentNode.parentNode.cells[2].innerText;
    var itemTelephone = item.parentNode.parentNode.cells[3].innerText;

    var viewContent = document.getElementById("viewContent");
    viewContent.innerHTML = `
        <p><strong>Name:</strong> ${itemName}</p>
        <p><strong>Description:</strong> ${itemDescription}</p>
        <p><strong>Address:</strong> ${itemAddress}</p>
        <p><strong>Telephone:</strong> ${itemTelephone}</p>
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
    var itemDescription = item.parentNode.parentNode.cells[1].innerText;
    var itemAddress = item.parentNode.parentNode.cells[2].innerText;
    var itemTelephone = item.parentNode.parentNode.cells[3].innerText;

    var editContent = document.getElementById("editContent");
    editContent.innerHTML = `
        <label for="editName">Name:</label>
        <input type="text" id="editName" value="${itemName}">

        <label for="editDescription">Description:</label>
        <input type="text" id="editDescription" value="${itemDescription}">

        <label for="editAddress">Address:</label>
        <input type="text" id="editAddress" value="${itemAddress}">

        <label for="editTelephone">Telephone:</label>
        <input type="text" id="editTelephone" value="${itemTelephone}">

        <button onclick="confirmEdit()">Save Changes</button>
    `;

    document.getElementById("editModal").style.display = "flex";
}

// Function to confirm the Edit action
function confirmEdit() {
    var updatedName = document.getElementById("editName").value;
    var updatedDescription = document.getElementById("editDescription").value;
    var updatedAddress = document.getElementById("editAddress").value;
    var updatedTelephone = document.getElementById("editTelephone").value;

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
