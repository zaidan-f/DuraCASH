<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko</title>
    <link rel="stylesheet" href="css/styleAll.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <img src="https://i.postimg.cc/tTYs3TPG/image-2.png" alt="">
            <a href="/dashboard">DuraPOS</a>
        </div>

        <div class="account-section">
            <img src="img\account.png" alt="Account Image">
        </div>
    </div>

    <!-- Sidebar -->
    <div id="sidebar" class="sidenav">
        <div class="sidebar-item" tabindex="0">
            <a href="/dashboard">
                <i class="ion-ios-home ion-2x"></i>
                Dashboard
            </a>
        </div>

        <div class="sidebar-item">
            <a href="/customer">
                <i class="ion-android-people ion-2x"></i>
                Customer
            </a>
        </div>

        <div class="sidebar-item">
            <a href="/items">
                <i class="ion-bag ion-2x"></i>
                Produk
            </a>
        </div>

        <div class="sidebar-item">
            <a href="/report">
                <i class="ion-stats-bars ion-2x"></i>
                Laporan
            </a>
        </div>

        <div class="sidebar-item">
            <a href="/store">
                <i class="ion-android-cart ion-2x"></i>
                Toko
            </a>
        </div>

        <div class="sidebar-item">
            <a href="/transaction">
                <i class="ion-monitor ion-2x"></i>
                Transaksi
            </a>
        </div>

        <div class="logout-button">
            <a href="/logout">
                <i class="ion-log-out ion-2x"></i>
                Logout
            </a>
        </div>

    </div>

    <!-- Page Content -->
    <div class="container mt-5">
        <h2>List Toko</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Deskripsi</th>
                    <th>Telephone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $store)
                <tr>
                    <td>{{ $store['name'] }}</td>
                    <td>{{ $store['deskripsi'] }}</td>
                    <td>{{ $store['alamat'] }}</td>
                    <td>{{ $store['telephone'] }}</td>
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

    <!-- Add this HTML structure inside your existing document, preferably near the end of the body -->
    <div class="modal-container" id="viewModal">
        <div class="modal-content">
            <!-- Content for View Pop-up -->
            <h3>View Store</h3>
            <div id="viewContent">
                <!-- Content will be dynamically populated here -->
            </div>
            <button onclick="closeViewModal()">Close</button>
        </div>
    </div>

    <div class="modal-container" id="editModal">
        <div class="modal-content">
            <!-- Content for Edit Pop-up -->
            <h3>Edit Store</h3>
            <div id="editContent">
                <!-- Content will be dynamically populated here -->
            </div>
            <button onclick="closeEditModal()">Close</button>
        </div>
    </div>

<div class="modal-container" id="deleteModal">
    <div class="modal-content">
        <!-- Content for Delete Confirmation Pop-up -->
        <!-- You can customize this section based on your needs -->
        <h3>Delete Store</h3>
        <p>Are you sure you want to delete this item?</p>
        <button onclick="confirmDelete()">Confirm</button>
        <button onclick="closeDeleteModal()">Cancel</button>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/store.js"></script>
</body>

</html>
