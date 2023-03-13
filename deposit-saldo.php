<?php
include 'header.php';

require_once "utility.php";
$email = $_SESSION['email'];
$link = "getProfile&email=" . urlencode($email);
?>



<div class="page-content-wrapper py-3">
    <div class="shop-pagination pb-3">
        <div class="container">
            <div class="card">
                <div class="card-body p-2">
                    <div class="align-items-center justify-content-between">
                        <div class="card user-info-card mb-3 px-2 py-2">
                            <h5 class="ms-1">Rekening Tujuan</h5>    
                            <div class="card-body d-flex align-items-center">
                                <div class="user-profile me-3"><img src="asset/img/profile/logo.png" alt="" style="height:100%"></div>
                                <div class="user-info">
                                    <h6 class="bold mb-1">Bank Plecit</h6>
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-1">0987765412</h5>
                                    </div>
                                    <p>Hippo Official</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Fullscreen Modal -->
    <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-labelledby="fullscreenModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-md-down">
            <?php

            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $no_rekening = $_POST['no_rekening'];
                $nama = $_POST['nama'];
                $jumlah_transfer = $_POST['jumlah_transfer'];
                $extensi_izin = array("jpg", "jpeg", "png", "pdf", "gif");
                $size_izin = (2097152 / 2);

                $allow_file = true;
                $sumber_file = $_FILES['bukti_transfer']['tmp_name'];
                $target_file = "image/";
                $nama_file = $_FILES['bukti_transfer']['name'];
                $size_file = $_FILES['bukti_transfer']['size'];

                if ($nama_file != "") {
                    if ($size_file > $size_izin) {
                        $error .= "- Ukuran File file tidak Boleh Melebihi 1 MB";
                        $allow_file = false;
                    } else {
                        $getExtensi = explode(".", $nama_file);
                        $extensi_file = strtolower(end($getExtensi));
                        $nama_file = "bukti-transfer-" . $email . "_" . $id . "_" . $nama_file . '.' . $extensi_file;
                        if (!in_array($extensi_file, $extensi_izin) == true) {
                            $error .= " File hanya diperbolehkan dalam bentuk bukti_transfer (jpg, jpeg, png, gif)";
                            $allow_ktp = false;
                        }
                    }

                    if ($allow_file) {
                        if (!move_uploaded_file($sumber_file, $target_file . $nama_file)) {
                            $error .= " Gagal Uplaod File file ke server";
                            $error .= $sumber_file . " " . $target_file . $nama_file;
                            $allow_file = false;
                        }
                    }
                    if ($allow_file)
                        $kelurga_imgNik = $nama_file;
                }

                $link = "setDeposit&email=" . urlencode($email) .
                '&no_rekening=' . urlencode($no_rekening) . '&nama=' . urlencode($nama) . '&jumlah_transfer=' . urlencode($jumlah_transfer) . '&bukti_transfer=' . urlencode($nama_file)  . '&type=insert';
                $data = getRegistran($link);
                if ($data && $data == 1) {
                    echo '<script>alert("data berhasil diatambah")</script>';
                }
                                    // } else {
                                    //     echo '<script>alert("data GAGAL diatmabah")</script>';
                                    //     header('Location:portfolio.php');
                                    // }
            }
            ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="fullscreenModalLabel">Deposit Saldo Hippo</h6>
                    <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <label for="">Email</label>
                        <input value="<?php echo $email ?>" name="email" class="form-control" type="text" readonly autofocus><br>
                        <label for="">No Rekening</label>
                        <input name="no_rekening" class="form-control" type="number"><br>
                        <label for="">Atas Nama</label>
                        <input name="nama" class="form-control" type="text"><br>
                        <label for="">Jumlah Transfer</label>
                        <input name="jumlah_transfer" class="form-control" type="number"><br>
                        <label for="">Bukti Transfer</label>
                        <input name="bukti_transfer" class="form-control" type="file"><br>
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                        <button name="submit" class="btn btn-success" type="submit">Kirim</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>






<div class="container">
    <div class="card">
      <div class="card-body">
       <h5 class="ms-1">Transfer Via Bank</h5>  
       <div class="list-group">
        <a class="btn list-group-item list-group-item-action" type="button" data-bs-toggle="modal" data-bs-target="#fullscreenModal">
            <div class="user-profile me-3"><img src="asset/img/icons/bri.png" alt="" style="max-width: 8%;"> <span class="px-2"> Bank BRI</span></div>
        </a>
        <a class="list-group-item list-group-item-action" href="#">
            <div class="user-profile me-3"><img src="asset/img/icons/bca.png" alt="" style="max-width: 8%;"> <span class="px-2"> Bank BCA</span></div>
        </a>
        <a class="list-group-item list-group-item-action" href="#">
            <div class="user-profile me-3"><img src="asset/img/icons/bni.png" alt="" style="max-width: 8%;"> <span class="px-2"> Bank BNI</span></div>
        </a>
    </div>
</div>
</div>

<div class="card mt-3">
  <div class="card-body">
    <h5 class="ms-1">Transfer Via Aplikasi</h5>  
    <div class="list-group">
        <a class="list-group-item list-group-item-action" href="#">
            <div class="user-profile me-3"><img src="asset/img/icons/dana.png" alt="" style="max-width: 8%;"> <span class="px-2"> Dana</span></div>
        </a>
        <a class="list-group-item list-group-item-action" href="#">
            <div class="user-profile me-3"><img src="asset/img/icons/ovo.png" alt="" style="max-width: 8%;"> <span class="px-2"> OVO</span></div>
        </a>
        <a class="list-group-item list-group-item-action" href="#">
            <div class="user-profile me-3"><img src="asset/img/icons/gopay.png" alt="" style="max-width: 8%;"> <span class="px-2"> Go Pay</span></div>
        </a>
    </div>
</div>
</div>
</div>
</div>
<?php include 'footer.php'; ?>