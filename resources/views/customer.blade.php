<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer</title>
    <link rel="stylesheet" href="css/styleAll.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
    @include('layout.sidebar')

    <!-- Page Content -->
    <div class="container mt-5">
        <h2>List Customer
            <button class="add-btn" onclick="openAddModal()"><i class="ion-plus ion-2x"></i>Tambah Customer</button>
        </h2>

        <!-- Search box -->
        <div class="search-box">
            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Search...">
                <button onclick="searchCustomers()">
                    <i class="ion-search ion-2x"></i>
                </button>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telephone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $customer)
                <tr>
                    <td>{{ $customer['name'] }}</td>
                    <td>{{ $customer['email'] }}</td>
                    <td>{{ $customer['phone'] }}</td>
                    <td class="action-buttons">
                        <a href="#" class="btn-view" onclick="openViewModal(this)">
                            <i class="ion-eye"></i>
                        </a>
                        <a href="#" class="btn-edit" onclick="openEditModal(this)">
                            <i class="ion-edit"></i>
                        </a>
                        <a href="#" class="btn-delete" onclick="openDeleteModal()">
                            <i class="ion-android-delete"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="modal-container" id="addModal">
        <div class="modal-content">
            <h3>Tambah Customer</h3>
            <div id="addContent">
                <!-- Add your form fields for adding a customer here -->
                <!-- Example: -->
                <label for="customerName">Name:</label>
                <input type="text" id="customerName" name="customerName" required>
    
                <label for="customerEmail">Email:</label>
                <input type="email" id="customerEmail" name="customerEmail" required>
    
                <label for="customerPhone">Phone:</label>
                <input type="text" id="customerPhone" name="customerPhone" required>
            </div>
            <div class="button-container">
                <button onclick="confirmAdd()">Tambah</button>
                <button onclick="closeAddModal()">Batal</button>
            </div>
        </div>
    </div>

    <!-- Add this HTML structure inside your existing document, preferably near the end of the body -->
    <div class="modal-container" id="viewModal">
        <div class="modal-content">
            <!-- Content for View Pop-up -->
            <h3>View Customer</h3>
            <div id="viewContent">
                <!-- Content will be dynamically populated here -->
            </div>
            <button class="close-btn" onclick="closeViewModal()">Close</button>
        </div>
    </div>

    <div class="modal-container" id="editModal">
        <div class="modal-content">
            <!-- Content for Edit Pop-up -->
            <h3>Edit Customer</h3>
            <div id="editContent">
                <!-- Content will be dynamically populated here -->
            </div>
            <button onclick="confirmEdit()">Ubah</button>
            <button onclick="closeEditModal()">Batal</button>
        </div>
    </div>

<div class="modal-container" id="deleteModal">
    <div class="modal-content">
        <!-- Content for Delete Confirmation Pop-up -->
        <!-- You can customize this section based on your needs -->
        <h3>Hapus Customer</h3>
        <p>Apakah Anda Yakin Ingin Menghapus Data?</p>
        <button onclick="confirmDelete()">Ya</button>
        <button onclick="closeDeleteModal()">Tidak</button>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/cust.js"></script>
</body>

</html>
