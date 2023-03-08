<?php
include "header.php";
if (isset($_POST['delete'])) {
    $id = $_POST['id_pendanaan'];
    $link = "getDeleteinvestor&id_pendanaan=" . urlencode($id);
    $output = getRegistran($link);
    if (!$output->data[0]->status == '1') {
        echo '<script>alert("data berhasil di hapus")</script>';
        header('Location:penerbit.php');
    } else {
        echo '<script>alert("data gagal di hapus")</script>';
    }
}


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
                    <h3>Data Penawaran</h3>
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
                <div class="card-header">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-hover" id="table1">
                        <thead>
                            <tr>
                                <th>Nama Pendana</th>
                                <th>Email Pendana</th>
                                <th>Email Penerbit</th>
                                <th>No HP Pendana</th>
                                <th>Jumlah Invest</th>
                                <th>Waktu Invest</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <?php
                        $link = "getPendanaanAdmin";
                        $output = getRegistran($link);
                        if ($output == 0) { ?>
                            <tr>
                                <td colspan="7" class="text-center mt-5">
                                    <h1>Data Kosong</h1>
                                    <img src="../asset/img/bg-img/hipopotamus.png" alt="">
                                </td>
                            </tr>
                        <?php
                        } else {
                            foreach ($output->data as $array_item) {
                                $pendanaan[] = array(
                                    'id_pendanaan' => $array_item->id_pendanaan,
                                    'id_bisnis' => $array_item->id_bisnis,
                                    'nama_pendana' => $array_item->nama_pendana,
                                    'email_pendana' => $array_item->email_pendana,
                                    'email_penerbit' => $array_item->email_penerbit,
                                    'no_hp' => $array_item->no_hp,
                                    'jumlah_invest' => $array_item->jumlah_invest,
                                    'waktu' => $array_item->waktu,
                                );
                            } ?>
                            <tbody>
                                <?php foreach ($pendanaan as $p) : ?>
                                    <tr>
                                        <td><?= $p['nama_pendana']; ?></td>
                                        <td><?= $p['email_pendana']; ?></td>
                                        <td><?= $p['email_penerbit']; ?></td>
                                        <td><?= $p['no_hp']; ?></td>
                                        <td><?= $p['jumlah_invest']; ?></td>
                                        <td><?= $p['waktu']; ?></td>
                                        <td class="text-center">
                                            <a class="btn btn-warning" href="?id=<?= $p['id_pendanaan']; ?>"><i class="bi bi-pencil-square"></i></a>
                                            <form action="" method="POST">
                                                <input type="hidden" name="id_pendanaan" value="<?= $p['id_pendanaan']; ?>">
                                                <button type="submit" name="delete" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>

                        <?php }
                        ?>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>