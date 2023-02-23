<?php
session_start();
require_once '../utility.php';
$error = "";
if(isset($_POST['reset']))
{
    $pass = $_POST['pass'];
    $pass1 = $_POST['pass1'];
    if($pass != $pass1) {
        $error = "Password tidak valid";
    } else {
        $email = $_SESSION['email'];
        $kode = $_POST['kode'];
        $link = "getKonfirmasi&email=".urlencode($email);
        $data = getRegistran($link);
        $kode1 = $data ->data[0]->code;
        if($kode1 == $kode) 
        {
            $link = "setReset&email=" . urlencode($_SESSION['email']) . "&password=" . urlencode($pass) . "&type=insert";
            $data = getRegistran($link);
            if($data && $data->status==1){
                header('Location:../login.php');
            } else {
                $error = "Kode tidak valid";
            }
        }
    }
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
    <div class="login-back-button"><a href="../login.php">
            <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" style="color:#FF735C"
                    d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z">
                </path>
            </svg></a></div>
    <!-- Login Wrapper Area -->
    <div class="login-wrapper d-flex align-items-center justify-content-center" style="background-color:#ffcfc9">
        <div class="custom-container">
            <div class="text-center px-4"><img class="login-intro-img" src="../asset/img/bg-img/UPDATE-PW.png" alt=""></div>
            <!-- Register Form -->
            <div class="register-form mt-4">
                <form action="" method="post">
                    <div class="form-group text-start mb-3">
                        <input class="form-control" type="text" name="kode" placeholder="Masukan Kode Keamanan Anda">
                    </div>
                    <div class="form-group text-start mb-3 position-relative">
                        <input class="form-control" id="psw-input" type="password" name="pass"
                            placeholder="Password Baru">
                        <div class="position-absolute" id="password-visibility"><i class="bi bi-eye"></i><i
                                class="bi bi-eye-slash"></i></div>
                    </div>
                    <div class="mb-3" id="pswmeter"></div>
                    <div class="form-group text-start mb-3">
                        <input class="form-control" type="password" name="pass1" placeholder="Konfirmasi Password">
                    </div>
                    <p class="text-center"><?php echo $error?></p>
                    <button class="btn text-white rounded-pill w-100" type="submit" name="reset" style="background-color:#FF735C">Perbaharui
                        Password</button>
                </form>
            </div>
        </div>
    </div>
    <!-- All JavaScript Files -->
    <script src="../asset/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/js/internet-status.js"></script>
    <script src="../asset/js/dark-rtl.js"></script>
    <!-- Password Strenght -->
    <script src="../asset/js/pswmeter.js"></script>
    <script src="../asset/js/active.js"></script>
    <!-- PWA -->
    <script src="../asset/js/pwa.js"></script>
</body>

</html>