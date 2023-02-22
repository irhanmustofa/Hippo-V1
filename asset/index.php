<?php
include 'jembatan.php';

if(isset($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $link = "masukindata&user=".$user.'&pass='.$pass.'&type=insert';
    $link ="select * from apa bfsdhfjsfs";
    $output = Test($link);
}

if(isset($_POST['tampil'])) {
    $link = "tampilindataUser&user=".$_POST['filter'];
    $output = Test($link);
        echo ($output->data[0]->user).'<br>';
        echo ($output->data[0]->pass);
    
}
?>

<form action="" method="POST">
    <label for="">User</label>
    <input type="text" name="user">
    <br>
    <label for="">Pass</label>
    <input type="text" name="pass">
    <br>
    <button type="submit" name="submit">Submit</button>
    <br><br><br><br>
    <label for="">Filter</label>
    <input type="text" name="filter">
    <button type="submit" name="tampil">tampil</button>

</form>