<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
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
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h2>Laporan Penjualan</h2>
            <!-- Print Button -->
            <button class="print-btn" onclick="printReport()"><i class="ion-android-print ion-2x"></i>Print</button>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Produk</th>
                    <th>Harga Jual</th>
                    <th>Qty Terjual</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $laporan)
                <tr>
                    <td>{{ $laporan['tanggal'] }}</td>
                    <td>{{ $laporan['produk'] }}</td>
                    <td>{{ $laporan['harga_jual'] }}</td>
                    <td>{{ $laporan['qty_jual'] }}</td>
                    <td>{{ $laporan['total'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="grand-total">
            <strong>Grand Total:</strong> {{ array_sum(array_column($data, 'total')) }}
        </div>
        

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/report.js"></script>
</body>
<script>
    function printReport() {
        window.print();
    }
</script>
</html>
