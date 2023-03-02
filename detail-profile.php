<?php
include 'header.php';
require_once 'utility.php';
$error = "";

$email = $_SESSION['email'];
$link = "getProfile&email=".urlencode($email);

$data = getRegistran($link); 
?>
<div class="page-content-wrapper py-3">
  <div class="container">
    <!-- User Meta Data-->
    <div class="card user-data-card">
      <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">
          <div class="mb-3">
            <label class="form-label">Foto Profil</label>
            <div><img src="./asset/img/profile/<?php echo ($data->data[0]->foto_profil); ?>" class="mb-1" width="100"></div>
            <input type="file" class="form-control" name="foto_profil">

          </div>
          <div class="form-group mb-3">
            <label class="form-label" for="fullname">Full Name</label>
            <input class="form-control" type="text" name="nama" value="<?php echo ($data->data[0]->nama) ?>">
          </div>
          <div class="form-group mb-3">
            <label class="form-label" for="email">Email Address</label>
            <input class="form-control" id="email" name="email" type="email" value="<?php echo ($data->data[0]->email) ?>" placeholder="Email Address" readonly>
          </div>
          <button class="btn btn-primary btn-sm" name="simpan" type="submit">Simpan Perubahan</button>
          <a href="preload/forget-password.php" class="btn btn-secondary btn-sm">Ubah Password</a>
        </form>
      </div>
    </div>
  </div>

  <div class="container mt-3">
    <!-- User Meta Data-->
    <div class="card user-data-card">
      <div class="card-body">
        <form>
          <div class="form-group mb-3">
            <label class="form-label" for="fullname">No Identitas</label>
            <input class="form-control" type="text" value="<?php echo ($data->data[0]->no_identitas) ?>" readonly>
          </div>
          <div class="mb-3">
            <label class="form-label">Foto KTP</label>
            <div><img src="./asset/img/ktp/<?php echo ($data->data[0]->foto_ktp); ?>" class="mb-1" width="100"></div>
          </div>
          <div class="form-group mb-3">
            <label class="form-label" for="fullname">No NPWP</label>
            <input class="form-control" type="text" name="no_npwp" value="<?php echo ($data->data[0]->no_npwp) ?>"readonly>
          </div>
          <div class="mb-3">
            <label class="form-label">Foto NPWP</label>
            <div><img src="./asset/img/npwp/<?php echo ($data->data[0]->foto_npwp); ?>" class="mb-1" width="100"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php 
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  if ($data && $data->status == '1') {
    $extensi_izin = array("jpg", "jpeg", "png", "gif");
    $size_izin = (2097152 / 2);

    $allow_profil = true;
    $sumber_profil = $_FILES['foto_profil']['tmp_name'];
    $target_profil = "./asset/img/profile/";
    $nama_profil = $_FILES['foto_profil']['name'];
    $size_profil = $_FILES['foto_profil']['size'];

    if ($nama_profil != "") {
      if ($size_profil > $size_izin) {
        $error .= "- Ukuran File profil tidak Boleh Melebihi 1 MB";
        $allow_profil = false;
      } else {
        $getExtensi = explode(".", $nama_profil);
        $extensi_profil = strtolower(end($getExtensi));
        $nama_profil = "profil-" . $email . ".". $extensi_profil;
        if (!in_array($extensi_profil, $extensi_izin) == true) {
          // if ($op == 'update') {
          //   $link = 'getKeluargaImage&id=' . $id . '&field=img_profil&nama=' . $kelurga_nama;
          //   $data = getData($link);
          //   if ($data && $data->status == 1) {
          //     unlink($target_profil . $data->data->img_profil);
          //   }
          // }
        // } else {
          $error .= " File hanya diperbolehkan dalam bentuk gambar (jpg, jpeg, png, gif)";
          $allow_profil = false;
        }
      }

      if ($allow_profil) {
        if (!move_uploaded_file($sumber_profil, $target_profil . $nama_profil)) {
          $error .= " Gagal Uplaod File profil ke server";
          $error .= $sumber_profil . " " . $target_profil . $nama_profil;
          $allow_profil = false;
        }
      }
      // if ($allow_profil)
      //   $kelurga_imgNik = $nama_profil;
    }


    if (!empty($_POST["foto_profil"])) {
      $link = "setProfil&nama=" . urlencode($nama) . "&email=" . urlencode($email);
      $data = getRegistran($link);
    } else {
      $link = "setProfilFoto&nama=" . urlencode($nama) . "&email=" . urlencode($email) . "&foto_profil=" . urlencode($nama_profil);
      echo $link;
      $data = getRegistran($link);
    }

  }

  echo "<script>alert ('Data berhasil diubah')</script>";
  // echo "<script>location = 'detail-profile.php'</script>";
}





include 'footer.php'; 

?>