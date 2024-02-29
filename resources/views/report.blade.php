<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
    <link rel="stylesheet" href="css/styleAll.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Modal Styles */
.modal {
    display: none; /* Hide the modal by default */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5); /* Black background with opacity */
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* Center modal on screen */
    padding: 20px;
    border: 1px solid #888;
    width: 50%; /* Adjust modal width as needed */
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

    </style>

</head>

<body>
    @include('layout.sidebar')
    <!-- Page Content -->
    <div class="container mt-5">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h2>Laporan Penjualan</h2>
            <!-- Print Button -->
            <button class="print-btn" onclick="printReport()"><i class="ion-android-print ion-2x"></i>Print</button>
        </div>
        <div class="datePeriod">
            <label for="dateRange">Periode:</label>
            <input type="date" id="startDate">
            <span>-</span>
            <input type="date" id="endDate" value="<?php echo date('Y-m-d'); ?>">
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
        
        <div class="chart">
            <h2>Laporan Penjualan</h2>
            <canvas id="salesChart" width="80%" height="20%" 
            data-labels="{{ json_encode($chartData['labels']) }}"
            data-data="{{ json_encode($chartData['data']) }}"></canvas>
        </div>

    </div>

        <!-- Modal -->
        <div id="printModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Print Options</h2>
                <button id="printTableBtn">Print by Table</button>
                <button id="printChartBtn">Print by Chart Diagram</button>
            </div>
        </div>

    @include('layout.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/report.js"></script>
    <script src="js/sidebar.js"></script>

</body>
<script>

</script>
</html>
