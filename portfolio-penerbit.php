<?php
include 'header2.php';

require_once "utility.php";
$email = $_SESSION['email'];
$link = "getProfile&email=" . urlencode($email);

$link = "getBisnis";
$data = getRegistran($link);
$id = $data->data[0]->id_bisnis;

$link = "getKategoriBisnis";
$kategori = getRegistran($link);
?>



<div class="page-content-wrapper py-3">
    <!-- Pagination-->
    <div class="shop-pagination pb-3">
        <div class="container">
            <div class="card">
                <div class="card-body p-2">
                    <div class="d-flex align-items-center justify-content-between"><small class="ms-1">Portfolio</small>
                        <div class="container d-flex justify-content-end">
                            <div class="card direction-rtl">
                                <div class="card-body">
                                    <!-- Fullscreen Modal Trigger Button -->
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#fullscreenModal">Ajukan Ide Bisnis</button>
                                </div>
                            </div>
                        </div>
                        <!-- Fullscreen Modal -->
                        <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-labelledby="fullscreenModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen-md-down">
                                <?php


                                if (isset($_POST['submit'])) {
                                    $id_bisnis = $_POST['id_bisnis'];
                                    $kode_bisnis = $_POST['kode_bisnis'];
                                    $nama_bisnis = $_POST['nama_bisnis'];
                                    $deskripsi = $_POST['deskripsi'];
                                    $dana = $_POST['dana'];
                                    $estimasi = $_POST['estimasi'];
                                    $lokasi = $_POST['lokasi'];
                                    $kategori = $_POST['kategori'];
                                    $email = $_POST['email'];
                                    $sistem_pengolahan = $_POST['sistem_pengolahan'];
                                    $skema_bisnis = $_POST['skema_bisnis'];
                                    $minimum_invest = $_POST['minimum_invest'];
                                    $extensi_izin = array("jpg", "jpeg", "png", "pdf", "gif");
                                    $size_izin = (2097152 / 2);

                                    $allow_file = true;
                                    $sumber_file = $_FILES['gambar']['tmp_name'];
                                    $target_file = "image/";
                                    $nama_file = $_FILES['gambar']['name'];
                                    $size_file = $_FILES['gambar']['size'];

                                    if ($nama_file != "") {
                                        if ($size_file > $size_izin) {
                                            $error .= "- Ukuran File file tidak Boleh Melebihi 1 MB";
                                            $allow_file = false;
                                        } else {
                                            $getExtensi = explode(".", $nama_file);
                                            $extensi_file = strtolower(end($getExtensi));
                                            $nama_file = "file-" . $email . "_" . $id . "_" . $nama_file . '.' . $extensi_file;
                                            if (!in_array($extensi_file, $extensi_izin) == true) {
                                                // if ($op == 'update') {
                                                //     $link = 'getKeluargaImage&id=' . $id . '&field=img_ktp&nama=' . $kelurga_nama;
                                                //     $data = getData($link);
                                                //     if ($data && $data->status == 1) {
                                                //         unlink($target_ktp . $data->data->img_ktp);
                                                //     }
                                                // }
                                                // } else {
                                                $error .= " File hanya diperbolehkan dalam bentuk gambar (jpg, jpeg, png, gif)";
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

                                    //FIle prospektus
                                    $allow_prospektus = true;
                                    $sumber_prospektus = $_FILES['prospektus']['tmp_name'];
                                    $target_prospektus = "prospektus/";
                                    $nama_prospektus = $_FILES['prospektus']['name'];
                                    $size_prospektus = $_FILES['prospektus']['size'];

                                    if ($nama_prospektus != "") {
                                        if ($size_prospektus > $size_izin) {
                                            $error .= "- Ukuran prospektus prospektus tidak Boleh Melebihi 1 MB";
                                            $allow_prospektus = false;
                                        } else {
                                            $getExtensi = explode(".", $nama_prospektus);
                                            $extensi_prospektus = strtolower(end($getExtensi));
                                            $nama_prospektus = "prospektus-" . $email . $id . $nama_prospektus . '.' . $extensi_prospektus;
                                            if (!in_array($extensi_prospektus, $extensi_izin) == true) {
                                                // if ($op == 'update') {
                                                //     $link = 'getKeluargaImage&id=' . $id . '&field=img_ktp&nama=' . $kelurga_nama;
                                                //     $data = getData($link);
                                                //     if ($data && $data->status == 1) {
                                                //         unlink($target_ktp . $data->data->img_ktp);
                                                //     }
                                                // }
                                                // } else {
                                                $error .= " prospektus hanya diperbolehkan dalam bentuk dokumen (jpg, jpeg, png, gif, pdf)";
                                                $allow_ktp = false;
                                            }
                                        }

                                        if ($allow_prospektus) {
                                            if (!move_uploaded_file($sumber_prospektus, $target_prospektus . $nama_prospektus)) {
                                                $error .= " Gagal Uplaod prospektus prospektus ke server";
                                                $error .= $sumber_prospektus . " " . $target_prospektus . $nama_prospektus;
                                                $allow_prospektus = false;
                                            }
                                        }
                                        if ($allow_prospektus)
                                            $kelurga_imgNik = $nama_prospektus;
                                    }

                                    $link = "setBisnis&kode_bisnis=" . urlencode($kode_bisnis) .
                                    '&nama_bisnis=' . urlencode($nama_bisnis) . '&deskripsi=' . urlencode($deskripsi) .
                                    '&dana=' . urlencode($dana) . '&estimasi=' . urlencode($estimasi) . '&gambar=' . urlencode($nama_file) . '&prospektus=' . urlencode($nama_prospektus) . '&lokasi=' . urlencode($lokasi) . '&kategori=' . urlencode($kategori) . '&email=' . urlencode($email) . '&sistem_pengolahan=' . urlencode($sistem_pengolahan) . '&skema_bisnis=' . urlencode($skema_bisnis) . '&minimum_invest=' . urlencode($minimum_invest) . '&type=insert';
                                    $data = getRegistran($link);
                                    $output = $data;
                                    if ($output) {
                                        echo '<script>alert("data berhasil diatmabah")</script>';
                                        header('Location:portfolio.php');
                                    }
                                    // } else {
                                    //     echo '<script>alert("data GAGAL diatmabah")</script>';
                                    //     header('Location:portfolio.php');
                                    // }
                                }
                                ?>
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="fullscreenModalLabel">Halaman Ajukan Pendanaan</h6>
                                        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <input name="id_bisnis" class="form-control" type="hidden"><br>
                                            <label for="">Kode Bisnis</label>
                                            <input name="kode_bisnis" class="form-control" type="text" autofocus><br>
                                            <label for="">Nama Bisnis</label>
                                            <input name="nama_bisnis" class="form-control" type="text"><br>
                                            <label for="">Deskripsi Bisnis</label>
                                            <textarea name="deskripsi" id="deskripsi"></textarea><br>
                                             <label for="">Omset /Tahun (*Minimal Rp 1 Milyar)</label>
                                            <input name="omset" class="form-control" type="number"><br>
                                             <label for="">Lama Bisnis Berjalan (*Minimal 1-2 tahun)</label>
                                            <input name="lama_bisnis" class="form-control" type="text"><br>
                                             <label for="">Jumlah Lokasi Bisnis (*Minimal 3 lokasi untuk bisnis offline)</label>
                                            <input name="jumlah_lokasi_bisnis" class="form-control" type="number"><br>

                                            <label for="">Kebutuhan Dana</label>
                                            <input name="dana" class="form-control" type="number"><br>
                                            <label for="">Estimasi</label>
                                            <input name="estimasi" class="form-control" type="text"><br>
                                           
                                            
                                            <label for="">Lokasi</label>
                                            <input name="lokasi" class="form-control" type="text"><br>
                                            <label for="">Kategori</label>
                                            <select class="form-control" name="kategori" required="required">
                                                <option value="">--Pilih Kategori--</option>
                                                <?php foreach ($kategori->data as $array_item) { ?>
                                                    <option><?php echo $array_item->nama_kategori; ?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="">Email</label>
                                            <input name="email" class="form-control" type="text" value="<?php echo $email ?>" readonly><br>
                                            <!-- <label for="">Sistem Pengolahan</label>
                                            <select class="form-select" aria-label="Default select example" name="sistem_pengolahan">
                                                <option selected>--Pilih Sistem Pengolahan--</option>
                                                <option>Payroll</option>
                                                <option>Personalia</option>
                                                <option>Inventaris</option>
                                                <option>UMKM</option>
                                            </select> -->
                                            <label for="">Skema Bisnis</label>
                                            <select class="form-select" aria-label="Default select example" name="skema_bisnis">
                                                <option selected>--Pilih Skema Bisnis--</option>
                                                <option>Franchise</option>
                                                <option>Marketplace</option>
                                                <option>Dropship</option>
                                                <option>Subscription</option>
                                                <option>Manufaktur</option>
                                            </select>
                                            <label for="">Minimum Invest</label>
                                            <input value="1000000" name="minimum_invest" class="form-control" type="number" readonly><br>
                                            <label for="">Gambar</label>
                                            <input name="gambar" class="form-control" type="file"><br>
                                            <label for="">Prospektus</label>
                                            <input name="prospektus" class="form-control" type="file"><br>
                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                                            <button name="submit" class="btn btn-success" type="submit">Ajukan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Products-->
    <div class="top-products-area product-list-wrap">
        <div class="container">
            <div class="row g-3">
                <div class="col-12">
                    <?php
                    $link = "getBisnisUser&getProfile&email=" . urlencode($email);
                    $output = getRegistran($link);
                    if ($output == NULL) { ?>
                        <div class="card text-center">
                            <div class="card-header">
                                Data Kosong
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Silahkan <b>Ajukan Ide Bisnis</b></h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    <?php } else {


                        foreach ($output->data as $array_item) { ?>

                            <div class="card mb-3">
                                <div class="row g-0 align-items-center">
                                    <div class="col-md-4 ps-1">
                                        <div class="card-body">
                                            <a href="detail-bisnis.php?id=<?php echo $array_item->id_bisnis ?>">
                                                <img src="image/<?php echo $array_item->gambar ?>" class="img-fluid rounded-start" alt="...">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $array_item->nama_bisnis ?></h5>
                                            <p class="card-title"><?php echo $array_item->kode_bisnis ?></p>
                                            <p class="card-text"><?php echo $array_item->deskripsi ?></p>
                                            <?php
                                            if ($array_item->status == 'diterima') { ?>
                                                <span class="badge bg-success">Diterima</span>
                                            <?php  } elseif ($array_item->status == 'ditolak') { ?>
                                                <span class="badge bg-danger">Ditolak</span>
                                            <?php } else { ?>
                                                <span class="badge bg-warning">Diproses</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php
                                    if ($array_item->status == 'diterima') { ?>
                                        <div class="col-md-4">
                                            <div class="card-body">
                                                <a href="dana-terkumpul.php?id=<?php echo $array_item->id_bisnis ?>" class="btn btn-primary">Cek Dana Terkumpul</a>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>


                        <?php } ?>
                    <?php } ?>



                </div>
            </div>
        </div>
    </div>
    <!-- Pagination-->
    <!-- <div class="shop-pagination pt-3">
        <div class="container">
            <div class="card">
                <div class="card-body py-3">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-two justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <svg class="bi bi-chevron-left" width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">9</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div> -->
</div>
<?php include 'footer.php'; ?>