<?php
session_start();
require_once "koneksi.php";
if (function_exists($_GET['function'])) {
    $_GET['function']();
}


function getProfileAdmin()
{

    global $connect;
    if (!empty($_GET['email_admin']))
        $email_admin = $_GET['email_admin'];

    $query = "SELECT * FROM admin WHERE email_admin = '$email_admin'";
    $result = $connect->query($query);
    while ($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }

    if ($result) {
        $response = array(
            'status' => 1,
            'data' => $data
        );
    } else {
        $response = array(
            'status' => 0,
            'data' => $data
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

function getAdmin()
{

    global $connect;
    if (!empty($_GET['email_admin']))
        $email_admin = $_GET['email_admin'];
    if (!empty($_GET['password']))
        $password = md5($_GET['password']);



    $query = "SELECT * FROM admin WHERE email_admin = '$email_admin' AND password = '$password'";
    $result = $connect->query($query);
    while ($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }

    if ($data) {
        $response = array(
            'status' => 1,
            'data' => $data
        );
    } else {
        $response = array(
            'status' => 0,
            'data' => 'Gagal'
        );
    }
    header('Content-Type: application/json');
    echo json_encode($response);
}

function setAdminPw()
{

    global $connect;
    if (!empty($_GET['nama_admin']))
        $nama_admin = $_GET['nama_admin'];
    if (!empty($_GET['email_admin']))
        $email_admin = $_GET['email_admin'];
    if (!empty($_GET['password']))
        $password = md5($_GET['password']);


    $query = "UPDATE admin SET nama_admin = '$nama_admin', password = '$password' WHERE email_admin = '$email_admin'";
    $result = $connect->query($query);

    if ($result) {
        $response = array(
            'status' => 1,
            'data' => 'Sukses'
        );
    } else {
        $response = array(
            'status' => 0,
            'data' => 'Gagal'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

function setAdminNoPw()
{

    global $connect;
    if (!empty($_GET['nama_admin']))
        $nama_admin = $_GET['nama_admin'];
    if (!empty($_GET['email_admin']))
        $email_admin = $_GET['email_admin'];


    $query = "UPDATE admin SET nama_admin = '$nama_admin' WHERE email_admin = '$email_admin'";
    $result = $connect->query($query);

    if ($result) {
        $response = array(
            'status' => 1,
            'data' => 'Sukses'
        );
    } else {
        $response = array(
            'status' => 0,
            'data' => 'Gagal'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

function getKonfirmasi()
{
    global $connect;
    if (!empty($_GET['email']))
        $email = $_GET['email'];

    $query = "SELECT * FROM konfirmasi WHERE email = '$email'";
    $result = $connect->query($query);
    while ($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }

    if ($data) {
        $response = array(
            'status' => 1,
            'data' => $data
        );
    } else {
        $response = array(
            'status' => 0,
            'data' => $data
        );
    }
    header('Content-Type: application/json');
    echo json_encode($response);
}

function getLogin()
{
    global $connect;
    if (!empty($_GET['email']))
        $email = $_GET['email'];

    $query = "SELECT * FROM register WHERE email = '$email'";
    $result = $connect->query($query);
    while ($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }

    if ($data) {
        $response = array(
            'status' => 1,
            'data' => $data
        );
    } else {
        $response = array(
            'status' => 0,
            'data' => $data
        );
    }
    header('Content-Type: application/json');
    echo json_encode($response);
}

function setKonfirmasi()
{
    global $connect;
    if (!empty($_GET['email']))
        $email = $_GET['email'];
    if (!empty($_GET['code']))
        $code = $_GET['code'];

    if ($email && $code) {
        $query = "INSERT INTO konfirmasi SET email = '$email', code = '$code'";
        $result = $connect->query($query);

        if ($result) {
            $response = array(
                'status' => 1,
                'data' => 'Sukses'
            );
        } else {
            $response = array(
                'status' => 0,
                'data' => 'Gagal'
            );
        }
    } else {
        $response = array(
            'status' => 0,
            'data' => 'Parameter Salah'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

function setRegistran()
{
    global $connect;
    if (!empty($_GET['nama']))
        $nama = $_GET['nama'];
    if (!empty($_GET['email']))
        $email = $_GET['email'];
    if (!empty($_GET['password']))
        $password = md5($_GET['password']);
    if (!empty($_GET['class']))
        $class = $_GET['class'];

    $query = "INSERT INTO register SET nama = '$nama', email = '$email', password = '$password', class = '$class'";
    $result = $connect->query($query);

    if ($result) {
        $response = array(
            'status' => 1,
            'data' => 'Sukses'
        );
    } else {
        $response = array(
            'status' => 0,
            'data' => 'Gagal'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

function isRegistedMail()
{
    global $connect;
    if (!empty($_GET['email']))
        $email = $_GET['email'];
    $data = null;
    $query = "SELECT * FROM register WHERE email = '$email'";
    $result = $connect->query($query);
    while ($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }

    if ($data) {
        $response = array(
            'status' => 1,
            'data' => $data
        );
    } else {
        $response = array(
            'status' => 0,
            'data' => $data
        );
    }
    header('Content-Type: application/json');
    echo json_encode($response);
}

function getUser()
{
    global $connect;
    if (!empty($_GET['email']))
        $email = $_GET['email'];
    if (!empty($_GET['password']))
        $password = md5($_GET['password']);

    $query = "SELECT * FROM user WHERE email = '$email'AND password = '$password'";
    $result = $connect->query($query);
    while ($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }

    if ($result) {
        $response = array(
            'status' => 1,
            'data' => $data
        );
    } else {
        $response = array(
            'status' => 0,
            'data' => 'Gagal'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

function setUser()
{
    global $connect;
    if (!empty($_GET['nama']))
        $nama = $_GET['nama'];
    if (!empty($_GET['email']))
        $email = $_GET['email'];
    if (!empty($_GET['password']))
        $password = md5($_GET['password']);
    if (!empty($_GET['class']))
        $class = $_GET['class'];

    $query = "INSERT INTO user SET nama = '$nama', email = '$email', password = '$password', class = '$class'";
    $result = $connect->query($query);

    if ($result) {
        $response = array(
            'status' => 1,
            'data' => 'Sukses'
        );
    } else {
        $response = array(
            'status' => 0,
            'data' => 'Gagal'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

function setVerifikasi()
{
    global $connect;
    if (!empty($_GET['email']))
        $email = $_GET['email'];
    if (!empty($_GET['code']))
        $code = $_GET['code'];

    $query = "UPDATE konfirmasi SET code = '$code' WHERE email = '$email'";
    $result = $connect->query($query);

    if ($result) {
        $response = array(
            'status' => 1,
            'data' => 'Sukses'
        );
    } else {
        $response = array(
            'status' => 0,
            'data' => 'Gagal'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

function setReset()
{
    global $connect;
    if (!empty($_GET['email']))
        $email = $_GET['email'];
    if (!empty($_GET['password']))
        $password = md5($_GET['password']);

    $query = "UPDATE user SET password = '$password' WHERE email = '$email'";
    $result = $connect->query($query);

    if ($result) {
        $response = array(
            'status' => 1,
            'data' => 'Sukses'
        );
    } else {
        $response = array(
            'status' => 0,
            'data' => 'Gagal'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

function getProfile()
{
    global $connect;
    if (!empty($_GET['email']))
        $email = $_GET['email'];

    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = $connect->query($query);
    while ($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }

    if ($result) {
        $response = array(
            'status' => 1,
            'data' => $data
        );
    } else {
        $response = array(
            'status' => 0,
            'data' => $data
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

function setUpdateUser()
{
    global $connect;
    if (!empty($_GET['email']))
        $email = $_GET['email'];
    if (!empty($_GET['no_identitas']))
        $no_identitas = $_GET['no_identitas'];
    if (!empty($_GET['foto_ktp']))
        $foto_ktp = $_GET['foto_ktp'];
    if (!empty($_GET['no_npwp']))
        $no_npwp = $_GET['no_npwp'];
    if (!empty($_GET['foto_npwp']))
        $foto_npwp = $_GET['foto_npwp'];
    if (!empty($_GET['alamat']))
        $alamat = $_GET['alamat'];
    if (!empty($_GET['foto_profil']))
        $foto_profil = $_GET['foto_profil'];

    $query = "UPDATE user SET no_identitas = '$no_identitas', foto_ktp = '$foto_ktp', no_npwp = '$no_npwp', foto_npwp = '$foto_npwp', alamat = '$alamat', foto_profil = '$foto_profil' WHERE email = '$email'";
    $result = $connect->query($query);

    if ($result) {
        $response = array(
            'status' => 1,
            'data' => 'Sukses'
        );
    } else {
        $response = array(
            'status' => 0,
            'data' => 'Gagal'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

function setProfil()
{
    global $connect;
    if (!empty($_GET['nama']))
        $nama = $_GET['nama'];
    if (!empty($_GET['email']))
        $email = $_GET['email'];

    $query = "UPDATE user SET nama = '$nama' WHERE email = '$email'";
    $result = $connect->query($query);

    if ($result) {
        $response = array(
            'status' => 1,
            'data' => 'Sukses'
        );
    } else {
        $response = array(
            'status' => 0,
            'data' => 'Gagal'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

function setProfilFoto()
{
    global $connect;
    if (!empty($_GET['nama']))
        $nama = $_GET['nama'];
    if (!empty($_GET['email']))
        $email = $_GET['email'];
    if (!empty($_GET['foto_profil']))
        $foto_profil = $_GET['foto_profil'];

    $query = "UPDATE user SET nama = '$nama', foto_profil = '$foto_profil' WHERE email = '$email'";
    $result = $connect->query($query);

    if ($result) {
        $response = array(
            'status' => 1,
            'data' => 'Sukses'
        );
    } else {
        $response = array(
            'status' => 0,
            'data' => 'Gagal'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

// ==============SET artikel PENGAJUAN===================
function setArtikel()
{
    global $connect;
    if (!empty($_GET['tanggal']))
        $tanggal = $_GET['tanggal'];
    if (!empty($_GET['judul']))
        $judul = $_GET['judul'];
    if (!empty($_GET['deskripsi']))
        $deskripsi = ($_GET['deskripsi']);
    if (!empty($_GET['gambar']))
        $gambar = $_GET['gambar'];


    if ($tanggal && $judul && $deskripsi && $gambar) {
        $query = "INSERT INTO artikel SET tanggal = '$tanggal', judul = '$judul', 
        deskripsi = '$deskripsi', gambar = '$gambar'";
        $result = $connect->query($query);

        if ($result) {
            $dodol = array(
                'status' => 1,
                'data' => 'Sukses'
            );
        } else {
            $dodol = array(
                'status' => 0,
                'data' => 'Gagal'
            );
        }
    } else {
        $dodol = array(
            'status' => 0,
            'data' => 'Paramater Salah'
        );
    }
    header('Content-Type: application/json');
    echo json_encode($dodol);
}

function getArtikel()
{
    global $connect;
    $query = "SELECT * FROM artikel";
    $result = $connect->query($query);

    while ($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }

    if ($result) {
        $dodol = array(
            'status' => 1,
            'data' => $data
        );
    } else {
        $dodol = array(
            'status' => 0,
            'data' => 'Gagal'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($dodol);
}

// ==============SET BISNIS PENGAJUAN===================
function setBisnis()
{
    global $connect;
    if (!empty($_GET['kode_bisnis']))
        $kode_bisnis = $_GET['kode_bisnis'];
    if (!empty($_GET['nama_bisnis']))
        $nama_bisnis = $_GET['nama_bisnis'];
    if (!empty($_GET['deskripsi']))
        $deskripsi = ($_GET['deskripsi']);
    if (!empty($_GET['dana']))
        $dana = $_GET['dana'];
    if (!empty($_GET['estimasi']))
        $estimasi = $_GET['estimasi'];
    if (!empty($_GET['gambar']))
        $gambar = $_GET['gambar'];
    if (!empty($_GET['lokasi']))
        $lokasi = $_GET['lokasi'];
    if (!empty($_GET['kategori']))
        $kategori = $_GET['kategori'];
    if (!empty($_GET['email']))
        $email = $_GET['email'];
    if (!empty($_GET['sistem_pengolahan']))
        $sistem_pengolahan = $_GET['sistem_pengolahan'];
    if (!empty($_GET['skema_bisnis']))
        $skema_bisnis = $_GET['skema_bisnis'];
    if (!empty($_GET['minimum_invest']))
        $minimum_invest = $_GET['minimum_invest'];



    if ($kode_bisnis && $nama_bisnis && $deskripsi && $dana && $estimasi && $gambar) {
        $query = "INSERT INTO bisnis SET kode_bisnis = '$kode_bisnis', nama_bisnis = '$nama_bisnis', 
        deskripsi = '$deskripsi', dana = '$dana', estimasi = '$estimasi', gambar = '$gambar', lokasi = '$lokasi', kategori = '$kategori', email = '$email', sistem_pengolahan = '$sistem_pengolahan', skema_bisnis = '$skema_bisnis', minimum_invest = '$minimum_invest'";
        $result = $connect->query($query);

        if ($result) {
            $dodol = array(
                'status' => 1,
                'data' => 'Sukses'
            );
        } else {
            $dodol = array(
                'status' => 0,
                'data' => 'Gagal'
            );
        }
    } else {
        $dodol = array(
            'status' => 0,
            'data' => 'Paramater Salah'
        );
    }
    header('Content-Type: application/json');
    echo json_encode($dodol);
}

function getBisnis()
{
    global $connect;
    $query = "SELECT * FROM bisnis";
    $result = $connect->query($query);

    while ($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }

    if ($result) {
        $dodol = array(
            'status' => 1,
            'data' => $data
        );
    } else {
        $dodol = array(
            'status' => 0,
            'data' => 'Gagal'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($dodol);
}

function getBisnisDetail()
{
    global $connect;
    if (!empty($_GET['id_bisnis']))
        $id_bisnis = $_GET['id_bisnis'];
    $query = "SELECT * FROM bisnis WHERE id_bisnis = '$id_bisnis'";
    $result = $connect->query($query);

    while ($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }

    if ($result) {
        $dodol = array(
            'status' => 1,
            'data' => $data
        );
    } else {
        $dodol = array(
            'status' => 0,
            'data' => 'Gagal'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($dodol);
}

function getArtikelDetail()
{
    global $connect;
    if (!empty($_GET['id']))
        $id = $_GET['id'];
    $query = "SELECT * FROM artikel WHERE id = '$id'";
    $result = $connect->query($query);

    while ($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }

    if ($result) {
        $dodol = array(
            'status' => 1,
            'data' => $data
        );
    } else {
        $dodol = array(
            'status' => 0,
            'data' => 'Gagal'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($dodol);
}



function getUserPenerbit()
{
    global $connect;
    if (!empty($_GET['nama']))
        $nama = md5($_GET['nama']);
    if (!empty($_GET['email']))
        $email = $_GET['email'];
    if (!empty($_GET['password']))
        $password = md5($_GET['password']);
    if (!empty($_GET['class']))
        $class = md5($_GET['class']);
    if (!empty($_GET['no_identitas']))
        $no_identitas = md5($_GET['no_identitas']);
    if (!empty($_GET['foto_ktp']))
        $foto_ktp = md5($_GET['foto_ktp']);
    if (!empty($_GET['no_npwp']))
        $no_npwp = md5($_GET['no_npwp']);
    if (!empty($_GET['foto_npwp']))
        $foto_npwp = md5($_GET['foto_npwp']);
    if (!empty($_GET['alamat']))
        $alamat = md5($_GET['alamat']);

    $query = "SELECT * FROM user WHERE class = 2";
    $result = $connect->query($query);
    while ($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }

    if ($result) {
        $response = array(
            'status' => 1,
            'data' => $data
        );
    } else {
        $response = array(
            'status' => 0,
            'data' => 'Gagal'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}



function getUserPendana()
{
    global $connect;
    if (!empty($_GET['nama']))
        $nama = md5($_GET['nama']);
    if (!empty($_GET['email']))
        $email = $_GET['email'];
    if (!empty($_GET['password']))
        $password = md5($_GET['password']);
    if (!empty($_GET['class']))
        $class = md5($_GET['class']);
    if (!empty($_GET['no_identitas']))
        $no_identitas = md5($_GET['no_identitas']);
    if (!empty($_GET['foto_ktp']))
        $foto_ktp = md5($_GET['foto_ktp']);
    if (!empty($_GET['no_npwp']))
        $no_npwp = md5($_GET['no_npwp']);
    if (!empty($_GET['foto_npwp']))
        $foto_npwp = md5($_GET['foto_npwp']);
    if (!empty($_GET['alamat']))
        $alamat = md5($_GET['alamat']);

    $query = "SELECT * FROM user WHERE class = 1";
    $result = $connect->query($query);
    while ($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }

    if ($result) {
        $response = array(
            'status' => 1,
            'data' => $data
        );
    } else {
        $response = array(
            'status' => 0,
            'data' => 'Gagal'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}
