<?php
include "../koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($connect, "DELETE FROM artikel WHERE id='$id'");
if ($query) {
    echo "<script>alert('Data Berhasil Dihapus!'); window.location = 'artikel.php'</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus!'); window.location = 'index.php'</script>";
}
