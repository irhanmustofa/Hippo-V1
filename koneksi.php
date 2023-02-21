<?php
$hostname = "8hippo.id";
$database = "n1731586_hippo";
$username = "n1731586_hippo";
$password = "LintingBako";
$connect = mysqli_connect($hostname, $username, $password, $database);
if (!$connect) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}