<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto+Mono&family=Ysabeau+Infant:wght@300&display=swap');

            body {
                margin: 0;
                padding: 0;
                font-family: 'Poppins', sans-serif;
                display: flex;
                flex-direction: column;
                height: 100%;
                min-height: 100vh;
            }

            /* Navbar */
            .navbar {
                background-color: #fff;
                display: flex;
                overflow: hidden;
                border-bottom: solid 2px #C42E1D;
                position: sticky;
                top: 0;
                width: 100%;
                z-index: 1;
                max-height: 50px;
            }

            .navbar a {
                flex-grow: 1;
                text-align: center;
                padding: 8px 6px;
                text-decoration: none;
                color: #C42E1D;
                font-weight: 1000;
                font-size: larger;
            }

            .logo {
                display: flex;
                align-items: center;
            }

            .logo img {
                max-width: 50px;
                height: auto;
                margin-left: 6px;
                margin-right: 6px;
            }

            .logo a {
                margin: 0;
            }

            /* Account Section */
            .account-section {
                display: flex;
                align-items: center;
                margin-left: auto;
                padding-right: 16px;
            }

            .account-section img {
                width: 40px;
                height: auto;
                border-radius: 50%;
                margin: 10px 0px 0px 0px;
            }

            .logout-button {
                position: fixed;
                bottom: 0;
                left: 0;
                width: 80px; /* Same width as the sidebar */
                background-color: #C42E1D;
                text-align: center;
                padding: 0px 0;
                border-top: solid 2px #fff;
                color: #fff;
            }

            .logout-button a {
                color: #fff;
                text-decoration: none;
                font-size: small;
                font-weight: 700;
            }


            /* Sidebar */
            .sidenav {
                height: 100%;
                width: 80px;
                position: fixed;
                z-index: 1;
                top: 52px;
                left: 0;
                border-right: solid 2px #C42E1D;
                background-color: #fff
            }

            .sidenav a:focus {
                color: #fff;
                background-color: #C42E1D;
                outline: none; 
            }

            .sidenav a {
                padding: 4px 0;
                text-decoration: none;
                text-align: center;
                color: black;
                display: flex;
                flex-direction: column;
                align-items: center;
                font-weight: 700;
                font-size: small;
            }

            .sidenav a i {
                margin-bottom: 5px;
                font-size: 22px;
                font-weight: 1000;
            }

            .sidenav a:hover {
                color: #C42E1D;
                background-color: #f1f1f1;
            }

            .sidenav a.active {
                color: #ffffff;
                background-color: #C42E1D;
            }

        </style>
    </head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <img src="img\logo.png" alt="">
            <a href="/dashboard">DuraPOS</a>
        </div>

        <div class="account-section">
            <a href="/account"><img src="img\account.png" alt="Account Image"></a>
        </div>
    </div>

    <!-- Sidebar -->
    <div id="sidebar" class="sidenav">
        <div class="sidebar-item" tabindex="0" id="dashboard">
            <a href="/dashboard">
                <i class="ion-ios-home-outline ion-2x"></i>
                Dashboard
            </a>
        </div>

        <div class="sidebar-item" id="customer">
            <a href="/customer">
                <i class="ion-ios-people-outline ion-2x"></i>
                Customer
            </a>
        </div>

        <div class="sidebar-item" id="items">
            <a href="/items">
                <i class="ion-bag ion-2x"></i>
                Produk
            </a>
        </div>

        <div class="sidebar-item" id="category">
            <a href="/category">
                <i class="ion-ios-list-outline ion-2x"></i>
                Kategori
            </a>
        </div>

        <div class="sidebar-item" id="store">
            <a href="/store">
                <i class="ion-ios-cart-outline ion-2x"></i>
                Toko
            </a>
        </div>

        <div class="sidebar-item" id="report">
            <a href="/report">
                <i class="ion-ios-paper-outline ion-2x"></i>
                Laporan
            </a>
        </div>

        <div class="sidebar-item" id="transaction">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        $(document).ready(function(){
        var url = window.location.href;
        var activePage = url.substr(url.lastIndexOf('/') + 1);
        $('.sidenav a').each(function(){
            var linkPage = $(this).attr('href').substr($(this).attr('href').lastIndexOf('/') + 1);
            if (linkPage === activePage) {
                $(this).addClass('active');
            }
        });
    });
</script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
