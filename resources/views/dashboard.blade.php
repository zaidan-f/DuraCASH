<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css\dashboard.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
<div class="content">
    <div class="text1">
        <h2>Dasboard Penjualan</h2>
    </div>

    <div class="card-container">
        <!-- Upper Cards -->
        <div class="card">
            <h2>Barang</h2>
            <h1>12412</h1>
            <a href="items">Lihat Detail</a>
        </div>

        <div class="card">
            <h2>Stok Barang</h2>
            <h1>2000</h1>
            <a href="/items">Lihat Detail</a>
        </div>
    </div>

    <div class="card-container">
        <!-- Lower Cards -->
        <div class="card">
            <h2>Customer</h2>
            <h1>1000</h1>
            <a href="/customer">Lihat Detail</a>
        </div>

        <div class="card">
            <h2>Toko</h2>
            <h1>50</h1>
            <a href="/store">Lihat Detail</a>
        </div>
    </div>
</div>


</body>
<script>

</script>
</html>