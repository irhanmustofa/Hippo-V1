<?php
include "header.php";
$link = "getUserPenerbit";
$output = getRegistran($link);
foreach ($output->data as $array_item) {
    $bisnis[] = array(
        'nama' => $array_item->nama,
        'email' => $array_item->email,
        'password' => $array_item->password,
        'no_identitas' => $array_item->no_identitas,
        'foto_ktp' => $array_item->foto_ktp,
        'no_npwp' => $array_item->no_npwp,
        'foto_npwp' => $array_item->foto_npwp,
        'alamat' => $array_item->alamat,
    );
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
                    <h3>Data Pendana</h3>
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
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-hover text-center" id="table1">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>No Identitas</th>
                                <th>Foto KTP</th>
                                <th>No NPWP</th>
                                <th>Foto NPWP</th>
                                <th>Alamat</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <?php
                        if (isset($_POST['delete'])) {
                            $id_user = $_POST['id_user'];
                            $link = "getDeletePendana&id_user=" . urlencode($id_user);
                            $data = getRegistran($link);
                            $output = $data;
                            if ($output->data[0]->status == '1') {
                                echo '<script>alert("data berhasil di hapus")</script>';
                                header('Location:penerbit.php');
                            } else {
                                echo '<script>alert("data gagal di hapus")</script>';
                            }
                        }

                        ?>
                        <?php foreach ($bisnis as $key => $value) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $value['nama']; ?></td>
                                    <td><?= $value['email']; ?></td>
                                    <td><?= $value['password']; ?></td>
                                    <td><?= $value['no_identitas']; ?></td>
                                    <td><?= $value['foto_ktp']; ?></td>
                                    <td><?= $value['no_npwp']; ?></td>
                                    <td><?= $value['foto_npwp']; ?></td>
                                    <td><?= $value['alamat']; ?></td>
                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name="id_user" value="<?php echo $value['id_user']; ?>">
                                            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>

        </section>
    </div>
    <?php include "footer.php"; ?>