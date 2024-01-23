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
    @include('layout.sidebar')
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


    @include('layout.footer')
    
</body>
<script>

</script>
</html>