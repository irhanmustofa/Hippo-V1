<?php
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

    $query = "UPDATE user SET no_identitas = '$no_identitas', foto_ktp = '$foto_ktp', no_npwp = '$no_npwp', foto_npwp = '$foto_npwp', alamat = '$alamat' WHERE email = '$email'";
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


    if ($kode_bisnis && $nama_bisnis && $deskripsi && $dana && $estimasi && $gambar) {
        $query = "INSERT INTO bisnis SET kode_bisnis = '$kode_bisnis', nama_bisnis = '$nama_bisnis', 
        deskripsi = '$deskripsi', dana = '$dana', estimasi = '$estimasi', gambar = '$gambar'";
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
