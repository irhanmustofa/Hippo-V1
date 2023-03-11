<?php
include "header.php";

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
                        <?php
                        $id = $_GET["id"];
                        $link = "getDanadetailAdmin&id_pendanaan=" . urldecode($id);
                        $data = getRegistran($link);

                        ?>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput">Nama Pendana</label>
                                <input type="text" class="form-control" id="basicInput" value="<?php echo $data->data[0]->nama_pendana; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="helperText">email pendana</label>
                                <input type="text" id="helperText" class="form-control" value="<?php echo $data->data[0]->email_pendana; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="helperText">email penerbit</label>
                                <input type="text" id="helperText" class="form-control" value="<?php echo $data->data[0]->email_penerbit; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="helperText">No hp</label>
                                <input type="text" id="helperText" class="form-control" value="<?php echo $data->data[0]->no_hp; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="helperText">Waktu Invest</label>
                                <input type="text" id="helperText" class="form-control" value="<?php echo $data->data[0]->waktu; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="disabledInput">Kode Bisnis</label>
                                <input type="text" class="form-control" value="<?php echo $data->data[0]->kode_bisnis; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="disabledInput">Nama Bisnis</label>
                                <input type="text" class="form-control" value="<?php echo $data->data[0]->nama_bisnis; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="disabledInput">Estimasi Bisnis</label>
                                <input type="text" class="form-control" value="<?php echo $data->data[0]->estimasi; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="disabledInput">Lokasi Bisnis</label>
                                <input type="text" class="form-control" value="<?php echo $data->data[0]->lokasi; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="disabledInput">Katewgori Bisnis</label>
                                <input type="text" class="form-control" value="<?php echo $data->data[0]->kategori; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="disabledInput">Sistem Pengelolaan</label>
                                <input type="text" class="form-control" value="<?php echo $data->data[0]->sistem_pengolahan; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="disabledInput">Skema Bisnis</label>
                                <input type="text" class="form-control" value="<?php echo $data->data[0]->skema_bisnis; ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="disabledInput">Gambar Bisnis</label>
                                <div class="card" style="width: 20rem;">
                                    <img src="../image/<?php echo $data->data[0]->gambar; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="disabledInput">Gambar Bisnis</label>
                                <div class="card" style="width: 20rem;">
                                    <img src="../prospektus/<?php echo $data->data[0]->prospektus; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="disabledInput">Deskripsi Bisnis</label>
                                <textarea name="deskripsi" id="deskripsi"><?php echo $data->data[0]->deskripsi; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="disabledInput">Kebutuhan Dana</label>
                                <input type="text" class="form-control" value="<?php echo $data->data[0]->dana; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="disabledInput">Minimum Invest</label>
                                <input type="text" class="form-control" value="<?php echo $data->data[0]->minimum_invest; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="helperText">Jumlah Invest</label>
                                <input type="text" id="helperText" class="form-control" value="<?php echo $data->data[0]->jumlah_invest; ?>" disabled>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Konfirmasi Ide Bisnis</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="mb-4">
                                <h6>Input group append</h6>
                                <form method="post">
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <div class="input-group mb-3">
                                        <select class="form-select" name="status">
                                            <option selected>--Konfirmasi Status--</option>
                                            <option value="diterima">Diterima</option>
                                            <option value="ditolak">Ditolak</option>
                                            <option value="ditolak">Direview</option>
                                        </select>
                                        <button class="btn  btn-primary input-group-text" type="submit" name="konfirmasi">Konfirmasi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <?php

    if (isset($_POST["konfirmasi"])) {
        $id = $_POST["id"];
        $status = $_POST["status"];

        if ($data && $data->status == '1') {
            $link = "setKonfirmasiBisnis&id_bisnis=" . urlencode($id) . "&status=" . urlencode($status);
            $data = getRegistran($link);
            echo "<script>alert ('Data ditambahkan')</script>";
            echo "<script>location = 'pengajuan-bisnis.php'</script>";
        }
    }
    include "footer.php";
    ?>