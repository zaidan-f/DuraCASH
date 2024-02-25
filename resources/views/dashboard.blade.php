<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css\dashboard.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



<body>
    @include('layout.sidebar')
    <!-- Page Content -->
    <div class="content">
        <div class="text1">
            <h2>Dasboard Penjualan</h2>
        </div>

        <!-- Flexbox container for the cards and chart -->
        <div class="flex-container">
            <!-- Card Container -->
            <div class="card-container">
                <div class="card">
                    <h2>Barang Terjual</h2>
                    <h1>12412</h1>
                    <a href="report">Lihat Detail</a>
                </div>

                <div class="card">
                    <h2>Stok Barang</h2>
                    <h1>2000</h1>
                    <a href="/items">Lihat Detail</a>
                </div>

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

            <!-- Chart Container -->
            <div class="chart">
                <h2>Laporan Penjualan</h2>
                <canvas id="salesChart" width="80%" height="20%" 
                data-labels="{{ json_encode($chartData['labels']) }}"
                data-data="{{ json_encode($chartData['data']) }}"></canvas>
            </div>
        </div>
    </div>




    @include('layout.footer')
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/sidebar.js"></script>
    <script src="js/dashboard.js"></script>
    
    
</body>
<script>

</script>
</html>