function resetPage() {
    location.reload(); // Reload the page
}

// Add this code to your JavaScript file or in a <script> tag
document.addEventListener("DOMContentLoaded", function() {
    // Get the current date
    var currentDate = new Date();

    // Format the date as YYYY-MM-DD (which is the format expected by the input type="date")
    var formattedDate = currentDate.toISOString().split('T')[0];

    // Set the value of the transaction date input field to today's date
    document.getElementById('transactionDate').value = formattedDate;
});


// Add this code to your JavaScript file
function openCustModal() {
    var modal = document.getElementById('customerModal');
    modal.style.display = 'block';
}

function closeCustModal() {
    var modal = document.getElementById('customerModal');
    modal.style.display = 'none';
}

// Close the modal if the user clicks outside of it
window.onclick = function(event) {
    var modal = document.getElementById('customerModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}

function yourActionFunction(name) {
    // Assuming you have an input field with id "customer"
    document.getElementById('customer').value = name;

    // Close the customer modal
    closeCustModal();
}


var selectedItems = [];

function openAddModal() {
    var modal = document.getElementById('addItems');
    modal.style.display = 'block';
}

function closeAddModal() {
    var modal = document.getElementById('addItems');
    modal.style.display = 'none';
}

// Close the modal if the user clicks outside of it
window.onclick = function (event) {
    var modal = document.getElementById('addItems');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}

function AddItemsAct(nameitem, stok, buy) {
    var newItem = { nameitem: nameitem, stok: stok, buy: buy };
    selectedItems.push(newItem);

    // Update the HTML to display the added items
    updateAddedItemsList();

    // Close the "Tambah Barang" modal
    closeAddModal();
}

function updateAddedItemsList() {
    var container = document.getElementById('addedItemsList');
    container.innerHTML = ''; // Clear the container

    // Loop through the selected items and append them to the container
    selectedItems.forEach(function (item) {
        var itemHtml = '<div>' +
            '<span>Name: ' + item.nameitem + '</span>' +
            '<span>Stok: ' + item.stok + '</span>' +
            '<span>Buy: ' + item.buy + '</span>' +
            '</div>';
        container.innerHTML += itemHtml;
    });
}

document.addEventListener('DOMContentLoaded', function() {
    // Get current date components
    var currentDate = new Date();
    var year = currentDate.getFullYear();
    var month = ('0' + (currentDate.getMonth() + 1)).slice(-2); // Add leading zero if needed
    var day = ('0' + currentDate.getDate()).slice(-2); // Add leading zero if needed

    // Generate POS number: POS-yyyyMMdd
    var generatedNumber = 'POS-' + year + month + day;

    // Set the value of the input field
    document.getElementById('transactionNumber').value = generatedNumber;
});

// Function to open the edit pop-up
function openEditModal(item) {
    // Get the data from the table row (you may need to customize this based on your table structure)
    var itemName = item.parentNode.parentNode.cells[0].innerText; // Change the index based on the column position
    var itemDescription = item.parentNode.parentNode.cells[1].innerText; // Change the index based on the column position
    var itemAddress = item.parentNode.parentNode.cells[2].innerText; // Change the index based on the column position
    var itemTelephone = item.parentNode.parentNode.cells[3].innerText; // Change the index based on the column position

    // Populate the content in the Edit Pop-up
    var editContent = document.getElementById("editContent");
    editContent.innerHTML = `
        <!-- You can use input fields or other form elements here -->
        <label for="editName">Nama:</label>
        <input type="text" id="editName" value="${itemName}">

        <label for="editDescription">Deskripsi:</label>
        <input type="text" id="editDescription" value="${itemDescription}">

        <label for="editAddress">Alamat:</label>
        <input type="text" id="editAddress" value="${itemAddress}">

        <label for="editTelephone">Telephone:</label>
        <input type="text" id="editTelephone" value="${itemTelephone}">

        <!-- Add more input fields as needed -->
        
    `;

    // Display the Edit Pop-up
    document.getElementById("editModal").style.display = "flex";
}

// Function to confirm the edit action
function confirmEdit() {
    // Get the updated values from the input fields
    var updatedName = document.getElementById("editName").value;
    var updatedQty = document.getElementById("editQty").value;
    var updatedSell = document.getElementById("editSell").value;
    var updatedTotal = document.getElementById("editTotal").value;

    // Add your logic here to handle the edit action
    // You can send the updated values to your server, update the table, etc.

    // For now, let's just close the pop-up
    closeEditModal();
}

// Function to open the edit pop-up and populate the fields
function openEditModal(element) {
    var row = element.closest("tr"); // Get the closest row
    var name = row.cells[0].innerText; // Assuming the name is in the first column
    var qty = row.cells[1].innerText; // Assuming quantity is in the second column

    // Populate the edit modal fields with the values from the selected row
    document.getElementById("editName").value = name;
    document.getElementById("editQty").value = qty;

    // You can add similar lines for other fields (sell, total) if needed

    // Display the edit modal
    document.getElementById("editModal").style.display = "flex";
}

// Function to close the edit pop-up
function closeEditModal() {
    document.getElementById("editModal").style.display = "none";
}

// Function to open the delete confirmation pop-up
function openDeleteModal() {
    document.getElementById("deleteConfirmModal").style.display = "flex";
}

// Function to close the delete confirmation pop-up
function closeDeleteModal() {
    document.getElementById("deleteConfirmModal").style.display = "none";
}

// Function to confirm the delete action
function confirmDelete() {
    // Add your logic here to handle the delete action
    // For now, let's just close the pop-up
    closeDeleteModal();
}
