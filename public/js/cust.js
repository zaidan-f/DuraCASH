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

function searchCustomers() {
    // Get input value
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("customerTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0]; // Assuming the customer name is in the first column
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}


// Function to open the View Modal
function openViewModal(item) {
    var itemName = item.parentNode.parentNode.cells[0].innerText;
    var itemAddress = item.parentNode.parentNode.cells[1].innerText;
    var itemTelephone = item.parentNode.parentNode.cells[2].innerText;

    var viewContent = document.getElementById("viewContent");
    viewContent.innerHTML = `
        <p><strong>Nama:</strong> ${itemName}</p>
        <p><strong>Alamat:</strong> ${itemAddress}</p>
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
    var itemAddress = item.parentNode.parentNode.cells[1].innerText;
    var itemTelephone = item.parentNode.parentNode.cells[2].innerText;

    var editContent = document.getElementById("editContent");
    editContent.innerHTML = `
        <label for="editName">Nama:</label>
        <input type="text" id="editName" value="${itemName}">

        <label for="editAddress">Alamat:</label>
        <input type="text" id="editAddress" value="${itemAddress}">

        <label for="editTelephone">Telephone:</label>
        <input type="text" id="editTelephone" value="${itemTelephone}">

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
