<?php
include 'header.php';

require_once "utility.php";
$email = $_SESSION['email'];
$link = "getProfile&email=" . urlencode($email);
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
                                    $kode_bisnis = $_POST['kode_bisnis'];
                                    $nama_bisnis = $_POST['nama_bisnis'];
                                    $deskripsi = $_POST['deskripsi'];
                                    $dana = $_POST['dana'];
                                    $estimasi = $_POST['estimasi'];
                                    $lokasi = $_POST['lokasi'];
                                    $kategori = $_POST['kategori'];
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
                                            $nama_file = "file-" . $id . "-" . $kelurga_nama . '.' . $extensi_file;
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

                                    $link = "setBisnis&kode_bisnis=" . urlencode($kode_bisnis) .
                                        '&nama_bisnis=' . urlencode($nama_bisnis) . '&deskripsi=' . urlencode($deskripsi) .
                                        '&dana=' . urlencode($dana) . '&estimasi=' . urlencode($estimasi) . '&gambar=' . urlencode($nama_file) . '&lokasi=' . urlencode($lokasi) . '&kategori=' . urlencode($kategori) . '&type=insert';
                                    $data = getRegistran($link);
                                    $output = $data;
                                    var_dump($output);
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
                                            <label for="">Kode Bisnis</label>
                                            <input name="kode_bisnis" class="form-control" type="text" autofocus><br>
                                            <label for="">Nama Bisnis</label>
                                            <input name="nama_bisnis" class="form-control" type="text"><br>
                                            <label for="">Deskripsi Bisnis</label>
                                            <textarea name="deskripsi" id="deskripsi"></textarea><br>
                                            <label for="">Kebutuhan Dana</label>
                                            <input name="dana" class="form-control" type="text"><br>
                                            <label for="">Estimasi</label>
                                            <input name="estimasi" class="form-control" type="text"><br>
                                            <label for="">Lokasi</label>
                                            <input name="lokasi" class="form-control" type="text"><br>
                                            <label for="">Kategori</label>
                                            <input name="kategori" class="form-control" type="text"><br>
                                            <label for="">Gambar</label>
                                            <input name="gambar" class="form-control" type="file"><br>
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
                    $link = "getBisnis&getProfile&email=" . urlencode($email);
                    $output = getRegistran($link);
                    foreach ($output->data as $array_item) {
                        echo '<div class="card single-product-card mt-2">';
                        echo ' <div class="card-body">';
                        echo '<div class="d-flex align-items-center">';
                        echo '<div class="card-side-img">';
                        echo '<a class="product-thumbnail d-block" href="detail-bisnis.php?id=' . $array_item->id_bisnis . '">';
                        echo '<img style="width:200px;" src="image/' . $array_item->gambar . '" />';
                        echo '<span class="badge bg-primary">Sale</span></a></div>';
                        echo '<div class="card-content px-4 py-2">';
                        echo $array_item->kode_bisnis . '<br>';
                        echo $array_item->nama_bisnis . '<br>';
                        echo $array_item->deskripsi . '<br> </div> </div> </div> </div>';
                        // tambahkan kode untuk menampilkan data dalam array lainnya

                        // foreach ($output as $row) {
                        //     echo $row["kode_bisnis"];
                        //     echo $row["nama_bisnis"];
                        //     echo $row["deskripsi"];
                        // }
                        // echo ($output->data[0]->kode_bisnis) . '<br>';


                    }
                    ?>

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