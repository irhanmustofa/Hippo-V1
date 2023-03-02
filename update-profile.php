<?php
include "header.php";
require_once 'utility.php';
$error = "";
$email = $_SESSION['email'];
$link = "getProfile&email=".urlencode($email);
$data = getRegistran($link);
// var_dump($data);
$nama = $data->data[0]->nama;
$password = $data->data[0]->password;
$class = $data->data[0]->class;



if(isset($_POST['update']))
{
  $no_identitas = $_POST['no_identitas'];
  $no_npwp = $_POST['no_npwp'];
  $alamat = $_POST['alamat'];

  if($data && $data->status == '1'){
    $extensi_izin = array("jpg", "jpeg", "png", "gif");
    $size_izin = (2097152 / 2);

    $allow_ktp = true;
    $sumber_ktp = $_FILES['foto_ktp']['tmp_name'];
    $target_ktp = "./asset/img/ktp/";
    $nama_ktp = $_FILES['foto_ktp']['name'];
    $size_ktp = $_FILES['foto_ktp']['size'];

    if ($nama_ktp != "") {
      if ($size_ktp > $size_izin) {
        $error .= "- Ukuran File KTP tidak Boleh Melebihi 1 MB";
        $allow_ktp = false;
      } else {
        $getExtensi = explode(".", $nama_ktp);
        $extensi_ktp = strtolower(end($getExtensi));
        $nama_ktp = "ktp-" . $email . ".". $extensi_ktp;
        if (!in_array($extensi_ktp, $extensi_izin) == true) {
          // if ($op == 'update') {
          //   $link = 'getKeluargaImage&id=' . $id . '&field=img_ktp&nama=' . $kelurga_nama;
          //   $data = getData($link);
          //   if ($data && $data->status == 1) {
          //     unlink($target_ktp . $data->data->img_ktp);
          //   }
          // }
        // } else {
          $error .= " File hanya diperbolehkan dalam bentuk gambar (jpg, jpeg, png, gif)";
          $allow_ktp = false;
        }
      }

      if ($allow_ktp) {
        if (!move_uploaded_file($sumber_ktp, $target_ktp . $nama_ktp)) {
          $error .= " Gagal Uplaod File KTP ke server";
          $error .= $sumber_ktp . " " . $target_ktp . $nama_ktp;
          $allow_ktp = false;
        }
      }
      // if ($allow_ktp)
      //   $kelurga_imgNik = $nama_ktp;
    }

    $allow_npwp = true;
    $sumber_npwp = $_FILES['foto_npwp']['tmp_name'];
    $target_npwp = "./asset/img/npwp/";
    $nama_npwp = $_FILES['foto_npwp']['name'];
    $size_npwp = $_FILES['foto_npwp']['size'];

    if ($nama_npwp != "") {
      if ($size_npwp > $size_izin) {
        $error .= "- Ukuran File npwp tidak Boleh Melebihi 1 MB";
        $allow_npwp = false;
      } else {
        $getExtensi = explode(".", $nama_npwp);
        $extensi_npwp = strtolower(end($getExtensi));
        $nama_npwp = "npwp-" . $email . ".". $extensi_npwp;
        if (!in_array($extensi_npwp, $extensi_izin) == true) {
          // if ($op == 'update') {
          //   $link = 'getKeluargaImage&id=' . $id . '&field=img_npwp&nama=' . $kelurga_nama;
          //   $data = getData($link);
          //   if ($data && $data->status == 1) {
          //     unlink($target_npwp . $data->data->img_npwp);
          //   }
          // }
        // } else {
          $error .= " File hanya diperbolehkan dalam bentuk gambar (jpg, jpeg, png, gif)";
          $allow_npwp = false;
        }
      }

      if ($allow_npwp) {
        if (!move_uploaded_file($sumber_npwp, $target_npwp . $nama_npwp)) {
          $error .= " Gagal Uplaod File npwp ke server";
          $error .= $sumber_npwp . " " . $target_npwp . $nama_npwp;
          $allow_npwp = false;
        }
      }
      // if ($allow_ktp)
      //   $kelurga_imgNik = $nama_ktp;
    }

    $link= "setUpdateUser&email=".urlencode($email)."&no_identitas=".urlencode($no_identitas)."&foto_ktp=".urlencode($nama_ktp)."&no_npwp=".urlencode($no_npwp)."&foto_npwp=".urlencode($nama_npwp)."&alamat=".urlencode($alamat);
        // echo $link;
    $data= getRegistran($link);
    echo '<script>alert("data berhasil diupdate")</script>';
    echo '<script>location = "index.php"</script>';
  }else {
    $error = 'Terjadi Kesalahan, silahkan coba beberapa saat lagi!';
  }




}

?>

<div class="page-content-wrapper py-3" style="background-color:#fdf3f2;">
  <div class="container">
    <!-- User Information-->
    <div class="card user-info-card mb-3">
      <div class="card-body d-flex align-items-center">
        <div class="user-profile me-3"><img src="asset/img/bg-img/7.jpg" alt="" style="height:100%"><i class="bi bi-pencil"></i>
          <form action="#">
            <input class="form-control" type="file">
          </form>
        </div>
        <div class="user-info">
          <div class="d-flex align-items-center">
            <h5 class="mb-1"><?php echo $nama; ?></h5><span class="badge bg-warning ms-2 rounded-pill">Pro</span>
          </div>
          <!-- <p class="mb-0">UX/UI Designer</p> -->
        </div>
      </div>
    </div>
    <!-- User Meta Data-->
    <div class="card user-data-card">
      <div class="card-body">
        <form method="post" enctype="multipart/form-data">
          <div class="form-group mb-3">
            <input class="form-control" id="nama" type="hidden" name="nama" value="<?php echo $nama; ?>" readonly>
          </div>
          <div class="form-group mb-3">
            <input class="form-control" id="password" type="hidden" name="password" value="<?php echo $password; ?>" readonly>
          </div>
          <div class="form-group mb-3">
            <input class="form-control" id="class" type="hidden" name="class" value="<?php echo $class; ?>" readonly>
          </div>
          <div class="form-group mb-3">
            <label class="form-label" for="">No Identitas</label>
            <input class="form-control" id="no_identitas" type="text" name="no_identitas">
          </div>
          <div class="form-group mb-3">
            <label class="form-label">Upload Foto KTP</label>
            <input type="file" class="form-control" name="foto_ktp" required="required">
          </div>
          <div class="form-group mb-3">
            <label class="form-label" for="">No NPWP</label>
            <input class="form-control" id="no_npwp" type="text" name="no_npwp">
          </div>
          <div class="form-group mb-3">
            <label class="form-label">Upload Foto NPWP</label>
            <input type="file" class="form-control" name="foto_npwp" required="required">
          </div>
          <div class="form-group mb-3">
            <label class="form-label" for="alamat">Alamat</label>
            <input class="form-control" id="alamat" type="text" name="alamat">
          </div>
          
          <button class="btn text-white w-100" type="submit" style="background-color:#FF735C" name="update">Update Now</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Footer Nav -->
<div class="footer-nav-area" id="footerNav">
  <div class="container px-0">
    <!-- =================================== -->
    <!-- Paste your Footer Content from here -->
    <!-- =================================== -->

    <?php 
    include "footer.php";

  ?>