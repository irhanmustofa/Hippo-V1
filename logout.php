<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
include "koneksi.php";
session_start();
session_destroy();

echo "<script>alert('Anda berhasil logout')</script>";
echo "<script>location = 'start.php'</script>";
