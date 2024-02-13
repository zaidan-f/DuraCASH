<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori Produk</title>
    <link rel="stylesheet" href="css/styleAll.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
    @include('layout.sidebar')
    <!-- Page Content -->
    <div class="container mt-5">
        <h2>List Kategori
            <div class="search-box">
                <div class="search-container">
                    <input type="text" id="searchInput" placeholder="Search...">
                    <button onclick="searchItem()">
                        <i class="ion-search ion-2x"></i>
                    </button>
                </div>
            </div>
        </h2>

            <button class="add-btn" onclick="openAddModal()"><i class="ion-plus ion-2x"></i>Tambah Kategori</button>
        

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $cat)
                <tr>
                    <td>{{ $cat['kategori'] }}</td>
                    <td>{{ $cat['deskripsi'] }}</td>
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
            <h3>Tambah Kategori</h3>
            <div id="addContent">

                <label for="itemName">Nama:</label>
                <input type="text" id="itemName" name="itemName" required>
    
                <label for="itemDesc">Deskripsi:</label>
                <input type="text" id="itemDesc" name="itemDesc" required>
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
            <h3>Detail Kategori</h3>
            <div id="viewContent">
                <!-- Content will be dynamically populated here -->
            </div>
            <button class="close-btn" onclick="closeViewModal()">Close</button>
        </div>
    </div>

    <div class="modal-container" id="editModal">
        <div class="modal-content">
            <!-- Content for Edit Pop-up -->
            <h3>Edit Kategori</h3>
            <div id="editContent">
                <!-- Content will be dynamically populated here -->
            </div>
            <div class="button-container">
                <button onclick="confirmEdit()">Ubah</button>
                <button onclick="closeEditModal()">Batal</button>
            </div>
        </div>
    </div>

<div class="modal-container" id="deleteModal">
    <div class="modal-content">
        <!-- Content for Delete Confirmation Pop-up -->
        <!-- You can customize this section based on your needs -->
        <h3>Hapus Produk</h3>
        <p>Apakah Anda Yakin Ingin Menghapus Data?</p>
        <div class="button-container">
            <button onclick="confirmDelete()">Ya</button>
            <button onclick="closeDeleteModal()">Tidak</button>
        </div>
    </div>
</div>

@include('layout.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/cat.js"></script>
</body>

</html>
