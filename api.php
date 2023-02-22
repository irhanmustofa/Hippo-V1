<?php
require_once "koneksi.php";
if (function_exists($_GET['function'])) {
    $_GET['function']();
}

function getKonfirmasi(){
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

    if ($email && $code){
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
    }else{
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
        $password = $_GET['password'];
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
        $password = $_GET['password'];

    $query = "SELECT * FROM user WHERE email = '$email', password = '$password'";
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
        $password = $_GET['password'];
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
