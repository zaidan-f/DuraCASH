<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi</title>
    <link rel="stylesheet" href="css/transaction.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
    @include('layout.sidebar')
    <!-- Page Content -->
    <div class="container">
        <h2>Transaksi
            <button class="refresh-btn" onclick="resetPage()">
                <i class="ion-refresh ion-2x"></i>
            </button>
        </h2>

        <div class="row">
            <div class="col-1">
                <label for="transactionNumber">Transaction Number :</label>
            </div>
            <div class="col-2">
                <input type="text" id="transactionNumber" name="transactionNumber" readonly required>
            </div>
        </div>

        <div class="row">
            <div class="col-1">
                <label for="transactionDate">Transaction Date :</label>
            </div>
            <div class="col-2">
                <input type="date" id="transactionDate" name="transactionDate" required>
            </div>
        </div>
            
        <div class="row">
            <div class="col-1">
                <label for="customer">Customer :</label>
            </div>
            <div class="col-2">
                <div class="add-customer-input">
                    <input type="text" id="customer" name="customer" required readonly>
                    <button class="add-btnCust" onclick="openCustModal()"><i class="ion-plus ion-2x"></i></button>
                </div>
            </div>
        </div>
        
        <div>
            <button class="add-btnItem" onclick="openAddModal()"><i class="ion-plus ion-2x"></i>Tambah Produk</button>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Qty</th>
                    <th>Harga Jual</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($itemData as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['qty'] }}</td>
                        <td>{{ $item['sell'] }}</td>
                        <td>{{ $item['total'] }}</td>
                        <td class="action-buttons">
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
        <div class="grand-total">
            <strong>Grand Total:</strong> {{ array_sum(array_column($itemData, 'total')) }}
        </div>

        <div>
            <button class="pay-btn" onclick="openPayModal()"><i class="ion-android-checkmark-circle ion-2x"></i>Bayar</button>
        </div>
    </div>

    <div id="customerModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeCustModal()">&times;</span>
            <div id="modalContent">
                <h3>Tambah Customer</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customerData  as $customer)
                            <tr>
                                <td>{{ $customer['namecust'] }}</td>
                                <td>{{ $customer['email'] }}</td>
                                <td>{{ $customer['phone'] }}</td>
                                <td class="action-buttons">
                                    <button class="add-btnCust" onclick="yourActionFunction('{{ $customer['namecust'] }}')">
                                        <i class="ion-plus ion-2x"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="addItems" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeAddModal()">&times;</span>
            <div id="modalContent">
                <h3>Tambah Barang
                    <div class="search-box">
                        <div class="search-container">
                            <input type="text" id="searchInput" placeholder="Search...">
                            <button onclick="searchItem()">
                                <i class="ion-search ion-2x"></i>
                            </button>
                        </div>
                    </div>
                </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($addItems  as $addItems)
                            <tr>
                                <td>{{ $addItems['nameitem'] }}</td>
                                <td>{{ $addItems['stok'] }}</td>
                                <td>{{ $addItems['buy'] }}</td>
                                <td class="action-buttons">
                                    <button class="add-btnCust" onclick="AddItemsAct('{{ $addItems['nameitem'] }}', '{{ $addItems['stok'] }}', '{{ $addItems['buy'] }}')">
                                        <i class="ion-plus ion-2x"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="modal">
        <div class="modal-content1">
            <h3>Edit Barang</h3>
            <!-- Replace with your actual form fields -->
            <div class="inputModal">
                <label for="editName">Nama:</label>
                <input type="text" id="editName" readonly>

                <label for="editQty">Qty:</label>
                <input type="text" id="editQty" required>

                <label for="editSell">Harga Jual:</label>
                <input type="text" id="editSell" required>

                <label for="editTotal">Total:</label>
                <input type="text" id="editTotal"  readonly>
            </div>
            <div class="button-container">
                <button onclick="saveChanges()">Ubah</button>
                <button onclick="closeEditModal()">Close</button>
            </div>
        </div>
    </div>



    <!-- Delete Confirmation Modal -->
    <div id="deleteConfirmModal" class="modal">
        <div class="modal-content1">
            <h3>Hapus Barang</h3>
            <p>Apakah Anda Yakin Ingin Menghapus Data?</p>
            <div class="button-container">
                <button onclick="deleteItem()">Ya</button>
                <button onclick="closeDeleteModal()">Tidak</button>
            </div>
        </div>
    </div>
   
    @include('layout.footer')
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/transaction.js"></script>
</body>

</html>
