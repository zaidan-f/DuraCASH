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
    // updateAddedItemsList();

    // Close the "Tambah Barang" modal
    closeAddModal();

    // Find the last added item's edit button and trigger the click event
    var editButtons = document.querySelectorAll('.btn-edit');
    var lastEditButton = editButtons[editButtons.length - 1];
    
    if (lastEditButton) {
        lastEditButton.click();
    }
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


// Function to open the edit pop-up and populate the fields
function openEditModal(element) {
    var row = element.closest("tr"); // Get the closest row
    var name = row.cells[0].innerText; // Assuming the name is in the first column
    var qty = row.cells[1].innerText; // Assuming quantity is in the second column
    var sell = row.cells[2].innerText;
    var total = row.cells[3].innerText;


    // Populate the edit modal fields with the values from the selected row
    document.getElementById("editName").value = name;
    document.getElementById("editQty").value = qty;
    document.getElementById("editSell").value = sell;
    document.getElementById("editTotal").value = total;

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

// Function to open the payment confirmation modal
function openPayModal() {
    var modal = document.getElementById('payModal');
    modal.style.display = 'block';
    populatePaymentDetails(); // Call function to populate payment details
}

// Function to close the payment confirmation modal
function cancelPayment() {
    var modal = document.getElementById('payModal');
    modal.style.display = 'none';
}

// Function to populate payment details in the table
function populatePaymentDetails() {
    var tableRows = document.querySelectorAll('.table tbody tr');
    var tableBody = document.getElementById('paymentDetails');

    // Clear existing rows
    tableBody.innerHTML = '';

    // Loop through the table rows
    tableRows.forEach(function(row) {
        var name = row.cells[0].textContent;
        var qty = row.cells[1].textContent;
        var sell = row.cells[2].textContent;
        var total = row.cells[3].textContent;

        var newRow = document.createElement('tr');

        var nameCell = document.createElement('td');
        nameCell.textContent = name;
        newRow.appendChild(nameCell);

        var qtyCell = document.createElement('td');
        qtyCell.textContent = qty;
        newRow.appendChild(qtyCell);

        var sellCell = document.createElement('td');
        sellCell.textContent = sell;
        newRow.appendChild(sellCell);

        var totalCell = document.createElement('td');
        totalCell.textContent = total;
        newRow.appendChild(totalCell);

        tableBody.appendChild(newRow);
    });
}



// Function to handle payment confirmation
function confirmPayment() {
    // Add your logic here to handle the payment confirmation
    // For example, you can submit the payment data to a server
    // and then close the modal once the payment is confirmed
    // closePayModal();
}