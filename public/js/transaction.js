function resetPage() {
    location.reload(); // Reload the page
}

function openCustomerModal() {
    // Implement logic to open the customer modal
    alert('Opening Customer Modal');
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