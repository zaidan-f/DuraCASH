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
                <input type="text" id="transactionNumber" name="transactionNumber" readonly>
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
                    <input type="text" id="customer" name="customer" required>
                    <button class="add-btnCust" onclick="openAddModal()"><i class="ion-plus ion-2x"></i></button>
                </div>
            </div>
        </div>
        
        <div>
            <button class="add-btn" onclick="openAddModal()"><i class="ion-plus ion-2x"></i>Tambah Produk</button>
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
                @foreach($data as $item)
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
            <strong>Grand Total:</strong> {{ array_sum(array_column($data, 'total')) }}
        </div>

        <div>
            <button class="pay-btn" onclick="openPayModal()"><i class="ion-android-checkmark-circle ion-2x"></i>Bayar</button>
        </div>
    </div>
   

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/transaction.js"></script>
</body>

</html>
