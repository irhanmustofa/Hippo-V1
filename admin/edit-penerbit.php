<?php
include "header.php";

require_once "../utility.php";

$id = $_GET["id"];

$link = "getAdminPenerbit&id_user=" . urlencode($id);
$data = getRegistran($link);

// if (isset($_POST["konfirmasi"])) {
//     $id = $_POST["id"];
//     $status = $_POST["status"];

//     if ($data && $data->status == '1') {
//         $link = "setKonfirmasiBisnis&id_bisnis=" . urlencode($id) . "&status=" . urlencode($status);
//         $data = getRegistran($link);
//         echo "<script>alert ('Data ditambahkan')</script>";
//         echo "<script>location = 'pengajuan-bisnis.php'</script>";
//     }
// }
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
                    <h3>Pengajuan Bisnis</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput">Nama Penerbit</label>
                                <input type="text" class="form-control" id="basicInput" value="<?php echo $data->data[0]->nama; ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="helpInputTop">Email Penerbit</label>
                                <input type="text" class="form-control" value="<?php echo $data->data[0]->email; ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="helperText">Password</label>
                                <input type="text" id="helperText" class="form-control" value="<?php echo $data->data[0]->password; ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="helperText">Status User</label>
                                <input type="text" id="helperText" class="form-control" value="<?php echo $data->data[0]->class = "Pendana"; ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="helperText">Nomor Identitas</label>
                                <input type="text" id="helperText" class="form-control" value="<?php echo $data->data[0]->no_identitas; ?>" disabled>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="disabledInput">Nomor NPWP</label>
                                <input type="text" class="form-control" value="<?php echo $data->data[0]->no_npwp; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="disabledInput">Alamat</label>
                                <input type="text" class="form-control" value="<?php echo $data->data[0]->alamat; ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="disabledInput">Foto Profil</label>
                                <div class="card" style="width: 15rem;">
                                    <img src="../asset/img/profile/<?php echo $data->data[0]->foto_profil; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="helperText">Foto KTP</label>
                                <div class="card" style="width: 15rem;">
                                    <img src="../asset/img/ktp/<?php echo $data->data[0]->foto_ktp; ?>" alt="">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    </div>
    <?php include "footer.php"; ?>