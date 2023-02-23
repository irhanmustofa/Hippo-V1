<?php
session_start();
if (!isset($_SESSION['start'])) {
    echo ("<script>location.href = 'start.php';</script>");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Affan - PWA Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Hippo</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="asset/img/core-img/favicon.ico">
    <link rel="apple-touch-icon" href="asset/img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="asset/img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="asset/img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/img/icons/icon-180x180.png">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/bootstrap-icons.css">
    <link rel="stylesheet" href="asset/css/tiny-slider.css">
    <link rel="stylesheet" href="asset/css/baguetteBox.min.css">
    <link rel="stylesheet" href="asset/css/rangeslider.css">
    <link rel="stylesheet" href="asset/css/vanilla-dataTables.min.css">
    <link rel="stylesheet" href="asset/css/apexcharts.css">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="asset/style.css">
    <!-- Web App Manifest -->
    <link rel="manifest" href="asset/manifest.json">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
    </div>
    <!-- Internet Connection Status -->
    <!-- # This code for showing internet connection status -->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Header Area -->
    <div class="header-area" id="headerArea">
        <div class="container">
            <!-- # Paste your Header Content from here -->
            <!-- # Header Five Layout -->
            <!-- # Copy the code from here ... -->
            <!-- Header Content -->
            <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
                <div class="logo-wrapper"><a href="page-home.html"><img src="asset/img/profile/logo.jpg" alt=""></a></div>
                <!-- Logo Wrapper -->
                <div class="logo-wrapper"><a href="page-home.html"><img src="img/core-img/logo-hippo.png" alt=""></a></div>
                <!-- Navbar Toggler -->
                <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas" data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas"><span class="d-block"></span><span class="d-block"></span><span class="d-block"></span></div>
            </div>
            <!-- # Header Five Layout End -->
        </div>
    </div>
    <!-- # Sidenav Left -->
    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-start" id="affanOffcanvas" data-bs-scroll="true" tabindex="-1" aria-labelledby="affanOffcanvsLabel">
        <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <div class="offcanvas-body p-0">
            <!-- Side Nav Wrapper -->
            <div class="sidenav-wrapper">
                <!-- Sidenav Profile -->
                <div class="sidenav-profile bg-gradient" style="color: black;">
                    <div class="sidenav-style1"></div>
                    <!-- User Thumbnail -->
                    <div class="user-profile"><img src="img/bg-img/2.jpg" alt=""></div>
                    <!-- User Info -->
                    <div class="user-info">
                        <h6 class="user-name mb-0">Affan Islam</h6><span>CEO, Designing World</span>
                    </div>
                </div>
                <!-- Sidenav Nav -->
                <ul class="sidenav-nav ps-0">
                    <li><a href="page-home.html"><i class="bi bi-house-door"></i>Home</a></li>
                    <li><a href="elements.html"><i class="bi bi-folder2-open"></i>Elements<span class="badge bg-danger rounded-pill ms-2">220+</span></a></li>
                    <li><a href="pages.html"><i class="bi bi-collection"></i>Pages<span class="badge bg-success rounded-pill ms-2">100+</span></a></li>
                    <li><a href="#"><i class="bi bi-cart-check"></i>Shop</a>
                        <ul>
                            <li><a href="page-shop-grid.html">Shop Grid</a></li>
                            <li><a href="page-shop-list.html">Shop List</a></li>
                            <li><a href="page-shop-details.html">Shop Details</a></li>
                            <li><a href="page-cart.html">Cart</a></li>
                            <li><a href="page-checkout.html">Checkout</a></li>
                        </ul>
                    </li>
                    <li><a href="settings.html"><i class="bi bi-gear"></i>Settings</a></li>
                    <li>
                        <div class="night-mode-nav"><i class="bi bi-moon"></i>Night Mode
                            <div class="form-check form-switch">
                                <input class="form-check-input form-check-success" id="darkSwitch" type="checkbox">
                            </div>
                        </div>
                    </li>
                    <li><a href="logout.php"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
                </ul>
                <!-- Social Info -->
                <div class="social-info-wrap"><a href="#"><i class="bi bi-facebook"></i></a><a href="#"><i class="bi bi-twitter"></i></a><a href="#"><i class="bi bi-linkedin"></i></a></div>
                <!-- Copyright Info -->
                <div class="copyright-info">
                    <p>2021 &copy; Made by<a href="#">Designing World</a></p>
                </div>
            </div>
        </div>
    </div>