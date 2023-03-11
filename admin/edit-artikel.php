<?php
include "header.php";

require_once "../utility.php";
$id = $_GET["id"];
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
                <?php
                $link = "getArtikelDetail&id=" . urlencode($id);
                $data = getRegistran($link);
                ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput">Tanggal Posting</label>
                                <input type="text" class="form-control" id="basicInput" value="<?php echo $data->data[0]->tanggal; ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="helpInputTop">Judul Artikel</label>
                                <input type="text" class="form-control" value="<?php echo $data->data[0]->judul; ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="helperText">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi"><?php echo $data->data[0]->deskripsi; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="helperText">Gambar</label>
                                <img src="image/<?php echo $data->data[0]->gambar; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <?php

    include "footer.php";
    ?>