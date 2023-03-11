<?php
include "header.php";
require_once "../utility.php";
$link = "getTransaksi";
$data = getRegistran($link);
$email_penerbit = ($data->data[0]->email_penerbit);
// $query = mysqli_connect("SELECT * FROM transaksi_pendanaan LEFT JOIN bisnis ON transaksi_pendanaan.email_penerbit = bisnis.email WHERE email_penerbit = 'irhanmustofaa@gmail.com'")
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
                    <h3>Dana Terkumpul</h3>
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

                </div>

                <div class="card-body table-responsive">
                    <table class="table table-striped table-hover" id="table1">
                        <thead>
                            <tr>
                                <th>Email Pendana</th>
                                <th>Email Penerbit</th>
                                <th>Nama Bisnis</th>
                                <th>Jumlah Investasi</th>
                                <th>Waktu Invest</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <?php
                        $link = "getDanaAdmin";
                        $output = getRegistran($link);
                        $no = 0;
                        if ($output && $output->status == 1) {
                            $data = $output->data;

                            foreach ($data as $key => $value) {
                                $no++;
                        ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $value->email_pendana ?></td>
                                        <td><?php echo $value->email_penerbit ?></td>
                                        <td><?php echo $value->nama_bisnis ?></td>
                                        <td><?php echo $value->jumlah_invest ?></td>
                                        <td><?php echo $value->waktu ?></td>
                                        <td class="text-center d-flex mt-3">
                                            <a href="edit-dana-terkumpul.php?id=<?php echo $value->id_pendanaan ?>" class="btn btn btn-warning mt-3"><i class="bi bi-eye"></i></a>
                                            <a href="delete.php?id=<?php echo $value->id ?>" class="btn btn btn-danger mt-3"><i class="bi bi-trash3-fill"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                        <?php
                            }
                        }
                        ?>
                    </table>
                </div>

            </div>
        </section>
        <?php include "footer.php"; ?>