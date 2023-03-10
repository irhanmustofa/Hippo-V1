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
    <link rel="icon" href="../asset/img/core-img/favicon.ico">
    <link rel="apple-touch-icon" href="../asset/img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../asset/img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="../asset/img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../asset/img/icons/icon-180x180.png">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/bootstrap-icons.css">
    <link rel="stylesheet" href="../asset/css/tiny-slider.css">
    <link rel="stylesheet" href="../asset/css/baguetteBox.min.css">
    <link rel="stylesheet" href="../asset/css/rangeslider.css">
    <link rel="stylesheet" href="../asset/css/vanilla-dataTables.min.css">
    <link rel="stylesheet" href="../asset/css/apexcharts.css">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../asset/style.css">
    <!-- Web App Manifest -->
    <link rel="manifest" href="../asset/manifest.json">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
    </div>
    <!-- Internet Connection Status -->
    <!-- # This code for showing internet connection status -->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Back Button -->
    <div class="login-back-button"><a href="otp.php">
            <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z">
                </path>
            </svg></a></div>
    <!-- Login Wrapper Area -->
    <div class="login-wrapper d-flex align-items-center justify-content-center bg-dark">
        <div class="custom-container">
            <div class="text-center"><img class="mx-auto mb-4 d-block" src="../asset/img/bg-img/38.png" alt="">
                <h3 class="text-success">Verifikasi No. Handphone</h3>
                <p class="mb-4">Masukan Kode OTP yang kami kirimkan ke <strong class="ms-1">+1 234 567 890</strong></p>
            </div>
            <!-- OTP Verify Form -->
            <div class="otp-verify-form mt-4">
                <form action="../index.php">
                    <div class="input-group mb-3 otp-input-group">
                        <input class="form-control" type="text" value="" placeholder="-" maxlength="1">
                        <input class="form-control" type="text" value="" placeholder="-" maxlength="1">
                        <input class="form-control" type="text" value="" placeholder="-" maxlength="1">
                        <input class="form-control" type="text" value="" placeholder="-" maxlength="1">
                        <input class="form-control" type="text" value="" placeholder="-" maxlength="1">
                        <input class="form-control" type="text" value="" placeholder="-" maxlength="1">
                        <input class="form-control" type="text" value="" placeholder="-" maxlength="1">
                        <input class="form-control" type="text" value="" placeholder="-" maxlength="1">
                    </div>
                    <button class="btn btn-warning rounded-pill w-100">Verifikasi &amp; Proses</button>
                </form>
            </div>
            <!-- Term & Privacy Info -->
            <div class="login-meta-data text-center">
                <p class="mt-3 mb-0">Tidak menerima OTP?<span class="otp-sec ms-1 text-white" id="resendOTP"></span></p>
            </div>
        </div>
    </div>
    <!-- All JavaScript Files -->
    <script src="../asset/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/js/internet-status.js"></script>
    <script src="../asset/js/dark-rtl.js"></script>
    <script src="../asset/js/otp-timer.js"></script>
    <script src="../asset/js/otp-input-switch.js"></script>
    <script src="../asset/js/active.js"></script>
    <!-- PWA -->
    <script src="../asset/js/pwa.js"></script>
</body>

</html>