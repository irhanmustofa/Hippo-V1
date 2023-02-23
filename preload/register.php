<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require_once '../asset/phpmailer/PHPMailer.php';
require_once '../asset/phpmailer/Exception.php';
require_once '../asset/phpmailer/SMTP.php';
require_once '../utility.php';

function generateCaptcha()
{
    $characters = 'AB0CD1EFG2HIJ3KLM4NOP5QRS6TU7VW8XY9Z';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 6; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$error = "";
if (isset($_POST['daftar'])) {
    if ($_POST['code'] == $_SESSION['captcha']) {
        $_SESSION['nama'] = $_POST['nama'];
        $email = $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        $class = $_POST['class'];
        $link = "isRegistedMail&email=" . urlencode($_SESSION['email']);
        $data = getRegistran($link);
        if ($data && $data->status == '1') {
            $error = "Email anda sudah terdaftar";
        } else {
            $kode = random_int(100000, 999999);
            $link = "setRegistran&email=" . urlencode($_SESSION['email']) . '&nama='. urlencode($_SESSION['nama']) . "&password=" . urlencode($_SESSION['password']) . "&class=" . urlencode($class)  . "&type=insert";
            $data = getRegistran($link);
            $link = "setKonfirmasi&email=" . urlencode($_SESSION['email']) . "&code=" . urlencode($kode) . "&type=insert";
            $data = getRegistran($link);
            if ($data && $data->status == '1') {
                $subject = 'Email Verifikasi';
                $pesan = 'Hallo ' . $_SESSION['nama'] . ',<br><br>';
                $pesan .= 'Kode Verifikasi Email Anda ' . $kode . '.<br><br><br><br>';
                $pesan .= 'Salam,<br>Team Hippo';

                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = 'true';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = "465";
                $mail->Username = "officialhippo8@gmail.com";
                $mail->Password = "bhvohkezszymoitv";
                $mail->isHTML(true);
                $mail->SetFrom('officialhippo8@gmail.com', "Hippo");
                $mail->addAddress($_SESSION['email']);

                $mail->Subject = $subject;
                $mail->Body = $pesan;
                $mail->smtpClose();
                if ($mail->send()) {
                    header("Location:confirm.php");
                } else {
                    $error = "Email verifikasi gagal dikirim, cek kembali data anda!";
                }
            } else {
                $error = 'Terjadi Kesalahan, silahkan coba beberapa saat lagi!';
            }
        }
    } else
        $error = 'Kode Tidak Valid';
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
            <div class="text-center px-4"><img class="login-intro-img" src="../asset/img/bg-img/SIGN-UP.png" alt=""></div>
            <!-- Register Form -->
            <div class="register-form mt-3">
                <h6 class="mb-3 text-center" style="color:#ff8300">Silahkan masukan data anda.</h6>
                <form action="" method="POST">
                    <div class="form-group text-start mb-3">
                        <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group text-start mb-3">
                        <input class="form-control" type="text" name="email" placeholder="Alamat Email" required>
                    </div>
                    <div class="form-group text-start mb-3 position-relative">
                        <input class="form-control" id="psw-input" type="password" name="password"
                            placeholder="Password Baru" required>
                        <div class="position-absolute" id="password-visibility"><i class="bi bi-eye"></i><i
                                class="bi bi-eye-slash"></i></div>
                    </div>

                    <div class="mb-3" id="pswmeter"></div>

                    <div class="d-flex justify-content-between">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="class" id="class1" value="1" checked>
                            <label class="form-check-label" style="color:#ff8300" for="class1">
                                Penerbit
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="class" id="class2" value="2">
                            <label class="form-check-label" style="color:#ff8300" for="class2">
                                Pemodal
                            </label>
                        </div>
                    </div>
                    <?php
                    $captcha = generateCaptcha();
                    $_SESSION['captcha'] = $captcha;
                    $tcaptcha = substr($captcha, 0, 1) . ' ' . substr($captcha, 1, 1) . ' ' . substr($captcha, 2, 1) . ' ' . substr($captcha, 3, 1) . ' ' . substr($captcha, 4, 1) . ' ' . substr($captcha, 5, 1);
                    ?>
                    <div>
                        <h4 class="text-center" style="color:#ff8300">
                            <?php echo $tcaptcha ?>
                        </h4>
                    </div>
                    <div class="form-group text-start mb-3">
                        <input class="form-control text-center" type="text" name="code"
                            placeholder="Masukan kode diatas" required>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" id="checkedCheckbox" type="checkbox" name="checkbox" value=""
                            checked required>
                        <label class="form-check-label text-muted fw-normal" for="checkedCheckbox">Saya Setuju dengan
                        </label><a href="privacy-policy.php" class="" style="color:#ff8300"> Privacy Policy.</a>
                    </div>
                    <p class="text-center text-danger">
                        <?php echo $error ?>
                    </p>
                    <button class="btn btn-warning rounded-pill w-100 text-white" type="submit" name="daftar" style="background-color:#FF735C">Mendaftar</button>
                </form>
            </div>
            <!-- Login Meta -->
            <div class="login-meta-data text-center">
                <p class="mt-3 mb-0">Sudah memiliki akun? <a class="stretched-link"
                        href="../login.php" style="color:#ff8300">Masuk</a>
                </p>
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