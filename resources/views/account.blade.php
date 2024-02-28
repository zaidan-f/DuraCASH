<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Account Page</title>
    <link rel="stylesheet" href="css/styleAll.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>
    @include('layout.sidebar')
    
    <div class="avatar">
        <!-- Replace the src attribute with the path to your avatar image -->
        <img src="img\account.jpg" alt="Avatar" style="width: 100%; height:100%;">
    </div>

    <div class="info-container">
        <button class="edit-acc" onclick="openEditPopup()">
            <i class="ion-edit"></i> Edit
        </button>
        <p><strong>Name:</strong> M. Qjyuxiehuano</p>
        <p><strong>Email:</strong> alamat@email.com</p>
        <p><strong>Address:</strong> Jl. Jalan Jalanan, Indonesia.</p>
        <p><strong>Telephone:</strong> 089643214765</p>
    </div>

@include('layout.footer')

<div id="overlay" class="overlay"></div>
<div id="editPopup" class="popup">
    <!-- Add your editing form or content here -->
    <h2>Edit Information</h2>
    <!-- Example input field (replace with your form elements) -->
    <input type="text" placeholder="Name">
    <input type="email" placeholder="Email">
    <input type="text" placeholder="Address">
    <input type="text" placeholder="Telephone">
    
    <button type="button" onclick="updateInformation()">Update</button>
    <button onclick="closeEditPopup()">Close</button>
</div>

<script>
// Function to open the edit popup
function openEditPopup() {
    document.getElementById('editPopup').classList.add('show');
    document.getElementById('overlay').classList.add('show');
}

function updateInformation() {
    // Get values from the form
    var newName = document.getElementById('editName').value;
    var newEmail = document.getElementById('editEmail').value;
    var newAddress = document.getElementById('editAddress').value;
    var newTelephone = document.getElementById('editTelephone').value;

    // Update the information in the container
    document.querySelector('.info-container p:nth-child(2)').innerHTML = '<strong>Email:</strong> ' + newEmail;
    document.querySelector('.info-container p:nth-child(3)').innerHTML = '<strong>Address:</strong> ' + newAddress;
    document.querySelector('.info-container p:nth-child(4)').innerHTML = '<strong>Telephone:</strong> ' + newTelephone;
}

// Function to close the edit popup
function closeEditPopup() {
    document.getElementById('editPopup').classList.remove('show');
    document.getElementById('overlay').classList.remove('show');
}
</script>
</body>
</html>
