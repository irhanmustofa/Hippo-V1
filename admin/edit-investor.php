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
                $link = "getInvestorAdmin&id_pendanaan=" . urlencode($id);
                $data = getRegistran($link);
                ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput">Nama Pendana</label>
                                <input type="text" class="form-control" id="basicInput" value="<?php echo $data->data[0]->nama_pendana; ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="helpInputTop">Email Pendana</label>
                                <input type="text" class="form-control" value="<?php echo $data->data[0]->email_pendana; ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="helperText">Nomo Handphone</label>
                                <input type="text" id="helperText" class="form-control" value="<?php echo $data->data[0]->no_hp; ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="helperText">Jumlah Invest</label>
                                <input type="text" id="helperText" class="form-control" value="<?php echo $data->data[0]->jumlah_invest; ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="helperText">Waktu Invest</label>
                                <input type="text" id="helperText" class="form-control" value="<?php echo $data->data[0]->waktu; ?>" disabled>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <?php

    include "footer.php";
    ?>