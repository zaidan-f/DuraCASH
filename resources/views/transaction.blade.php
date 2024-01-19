<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk</title>
    <link rel="stylesheet" href="css/transaction.css">
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
    <div class="container">
        <h2>Transaksi</h2>

        <div class="row">
            <div class="col-1">
                <label for="transactionNumber">Transaction Number :</label>
            </div>
            <div class="col-2">
                <input type="text" id="transactionNumber" name="transactionNumber" required>
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
                <input type="text" id="customer" name="customer" required>
            </div>
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

    </div>
   

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/().js"></script>
</body>

</html>
