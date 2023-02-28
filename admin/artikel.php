<?php
include "sidebar.php";
require_once "../utility.php";


?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Berita</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data Berita
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Artikel</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php
                                    if (isset($_POST['submit'])) {
                                        $tanggal = $_POST['tanggal'];
                                        $judul = $_POST['judul'];
                                        $deskripsi = $_POST['deskripsi'];
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
                                                $nama_file = "file-" . $id . "-" . '.' . $extensi_file;
                                                if (!in_array($extensi_file, $extensi_izin) == true) {
                                                    // if ($op == 'update') {
                                                    //     $link = 'getKeluargaImage&id=' . $id . '&field=img_ktp&nama=' . $kelurga_nama;
                                                    //     $data = getData($link);
                                                    //     if ($data && $data->status == 1) {
                                                    //         unlink($target_ktp . $data->data->img_ktp);
                                                    //     }
                                                    // }
                                                    // } else {
                                                    $error .= " File hanya diperbolehkan dalam bentuk gambar (jpg, jpeg, png,pdf, gif)";
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

                                        $link = "setArtikel&tanggal=" . urlencode($tanggal) .
                                            '&judul=' . urlencode($judul) . '&deskripsi=' . urlencode($deskripsi) .
                                            '&gambar=' . urlencode($nama_file) . '&type=insert';
                                        $data = getRegistran($link);
                                        $output = $data;
                                        var_dump($output);
                                        if ($output) {
                                            echo '<script>alert("data berhasil ditambah")</script>';
                                            header('Location:portfolio.php');
                                        }
                                        // } else {
                                        //     echo '<script>alert("data GAGAL diatmabah")</script>';
                                        //     header('Location:portfolio.php');
                                        // }
                                    }
                                    ?>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label class="form-label">Tanggal Posting</label>
                                            <input type="date" name="tanggal" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Judul Artikel</label>
                                            <input type="text" name="judul" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Deskripsi Artikel</label>
                                            <input type="text" name="deskripsi" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Gambar Artikel</label>
                                            <input type="file" name="gambar" class="form-control">
                                        </div>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="submit" class="btn btn-primary">Posting</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $link = "getArtikel";
                $output = getRegistran($link);
                $no = 0;
                if ($output && $output->status == 1) {
                    $data = $output->data;

                    foreach ($data as $key => $value) {
                        $no++;
                ?>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-hover" id="table1">
                                <thead>
                                    <tr>
                                        <th>Tanggal Posting</th>
                                        <th>Judul Artikel</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $value->tanggal ?></td>
                                        <td><?php echo $value->judul ?></td>
                                        <td style="width: 500px;"><?php echo $value->deskripsi ?></td>
                                        <td><img src="image/<?php echo $value->gambar ?>" alt="" width="100px"></td>
                                        <td class="text-center">
                                            <a href="edit.php?id=<?php echo $value->id ?>" class="btn btn btn-warning">Edit</a>
                                            <a href="delete.php?id=<?php echo $value->id ?>" class="btn btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </section>
    </div>
    <?php include "footer.php"; ?>