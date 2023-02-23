<?php
session_start();
if (!isset($_SESSION['start'])) {
    echo ("<script>location.href = 'start.php';</script>");
}
if (!isset($_SESSION['user'])) {
    echo ("<script>location.href = 'login.php';</script>");
}
require_once 'utility.php';
$error = "";
$user = $_SESSION['user'];
$notif = $task = $tagihan = 0;
$link = "countNotifikasi&user=" . urlencode($user);
$data = getApp($link);
if ($data && $data->status == '1')
    $notif = $data->data[0]->jumlah;

$link = "countTagihan&user=" . urlencode($user);
$data = getApp($link);
if ($data && $data->status == '1')
    $tagihan = $data->data[0]->jumlah;

$link = "countTask&user=" . urlencode($user);
$data = getApp($link);
if ($data && $data->status == '1')
    $task = $data->data[0]->jumlah;
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
    <title>MYTAX Indonesia</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
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
    <!-- Preloader 
    <div id="preloader">
        <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
    </div> -->
    <!-- Internet Connection Status -->
    <!-- # This code for showing internet connection status -->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Header Area -->
    <div class="header-area d-print-none" id="headerArea">
        <div class="container">
            <div
                class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
                <!-- Logo Wrapper -->
                <div class="logo-wrapper"><a href="?url=home"><img src="asset/img/core-img/logo.png" alt=""></a></div>
                <!-- Navbar Toggler -->
                <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas"
                    data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas"><span class="d-block"></span><span
                        class="d-block"></span><span class="d-block"></span></div>
            </div>
            <!-- # Header Five Layout End -->
        </div>
    </div>
    <!-- # Sidenav Left -->

    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-start" id="affanOffcanvas" data-bs-scroll="true" tabindex="-1"
        aria-labelledby="affanOffcanvsLabel">
        <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        <div class="offcanvas-body p-0">
            <!-- Side Nav Wrapper -->
            <div class="sidenav-wrapper">
                <!-- Sidenav Profile -->
                <div class="sidenav-profile bg-gradient">
                    <div class="sidenav-style1"></div>
                    <!-- User Thumbnail -->
                    <?php
                    $image = 'logo.png';
                    if ($_SESSION['image'] != '')
                        $image = $_SESSION['image'];
                    ?>
                    <div class="user-profile"><img src="asset/img/profile/<?php echo $image ?>" alt="Profile"></div>
                    <!-- User Info -->
                    <div class="user-info">
                        <h6 class="user-name mb-0">
                            <?php echo $_SESSION['nama'] ?>
                        </h6>
                        <span class="badge bg-warning rounded-pill pl-2 pr-2 text-dark">
                            <?php echo $_SESSION["service"] ?>
                        </span>
                    </div>
                </div>
                <!-- Sidenav Nav -->
                <ul class="sidenav-nav ps-0">
                    <li><a href="?url=profile"><i class="bi bi-person-circle"></i>Profile</a></li>
                    <li><a href="?url=notifikasi"><i class="bi bi-bell"></i>Notification
                            <?php
                            if ($notif > 0)
                                echo '<span class="badge bg-info rounded-pill ms-2">' . $notif . '</span>';
                            ?>
                        </a>
                    </li>
                    <li><a href="?url=task"><i class="bi bi-list-task"></i>Task
                            <?php
                            if ($task > 0)
                                echo '<span class="badge bg-warning rounded-pill ms-2">' . $task . '</span>';
                            ?>
                        </a>
                    </li>
                    <li><a href="?url=tagihan"><i class="bi bi-receipt"></i>Invoices
                            <?php
                            if ($tagihan > 0)
                                echo '<span class="badge bg-danger rounded-pill ms-2">' . $tagihan . '</span>';
                            ?>
                        </a>
                    </li>
                    <li><a href="?url=chat_cs"><i class="bi bi-chat-square-text"></i>Chat CS</a></li>
                    <li>
                        <div class="night-mode-nav"><i class="bi bi-moon"></i>Night Mode
                            <div class="form-check form-switch">
                                <input class="form-check-input form-check-success" id="darkSwitch" type="checkbox">
                            </div>
                        </div>
                    </li>
                    <li><a href="?url=logout"><i class="bi bi-key"></i>Change Password</a></li>
                    <li><a href="start.php"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
                </ul>
                <!-- Social Info -->
                <div class="social-info-wrap">
                    <a href="https://www.tiktok.com/@mytaxindonesia" target="_blank"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-tiktok" viewBox="0 0 16 16">
                            <path
                                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                        </svg></a>
                    <a href="https://twitter.com/MyTaxIndonesia" target="_blank"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/mytaxindonesia" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/mytaxindonesia/" target="_blank"><i
                            class="bi bi-instagram"></i></a>
                </div>
                <!-- Copyright Info -->
                <div class="copyright-info">
                    <p>2023 &copy; Made by<a href="https://mytax.co.id" target="_blank">MYTAX Indonesia</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content-wrapper">
        <?php include "navigator.php"; ?>
    </div>

    <!-- Footer Nav -->
    <div class="footer-nav-area d-print-none" id="footerNav">
        <div class="container px-0">
            <!-- Footer Content -->
            <div class="footer-nav position-relative">
                <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                    <li>
                        <a href="?url=home">
                            <svg class="bi bi-house" width="20" height="20" viewBox="0 0 16 16" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                                </path>
                            </svg>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="?url=personal_list">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                                <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path
                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z" />
                            </svg>
                            <span>Personal</span>
                        </a>
                    </li>
                    <li>
                        <a href="?url=company_list">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-buildings" viewBox="0 0 16 16">
                                <path
                                    d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022ZM6 8.694 1 10.36V15h5V8.694ZM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15Z" />
                                <path
                                    d="M2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-2 2h1v1H2v-1Zm2 0h1v1H4v-1Zm4-4h1v1H8V9Zm2 0h1v1h-1V9Zm-2 2h1v1H8v-1Zm2 0h1v1h-1v-1Zm2-2h1v1h-1V9Zm0 2h1v1h-1v-1ZM8 7h1v1H8V7Zm2 0h1v1h-1V7Zm2 0h1v1h-1V7ZM8 5h1v1H8V5Zm2 0h1v1h-1V5Zm2 0h1v1h-1V5Zm0-2h1v1h-1V3Z" />
                            </svg>
                            <span>Company</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="bi bi-chat-dots" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
                                </path>
                                <path
                                    d="M2.165 15.803l.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z">
                                </path>
                            </svg>
                            <span>Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href="?url=news">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-newspaper" viewBox="0 0 16 16">
                                <path
                                    d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                                <path
                                    d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                            </svg>
                            <span>News</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- All JavaScript Files -->
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/slideToggle.min.js"></script>
    <script src="asset/js/internet-status.js"></script>
    <script src="asset/js/tiny-slider.js"></script>
    <script src="asset/js/baguetteBox.min.js"></script>
    <script src="asset/js/countdown.js"></script>
    <script src="asset/js/rangeslider.min.js"></script>
    <script src="asset/js/vanilla-dataTables.min.js"></script>
    <script src="asset/js/index.js"></script>
    <script src="asset/js/magic-grid.min.js"></script>
    <script src="asset/js/dark-rtl.js"></script>
    <script src="asset/js/active.js"></script>
    <!-- PWA -->
    <script src="asset/js/pwa.js"></script>
</body>

</html>