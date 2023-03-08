<?php
include "header.php";
$link = "getBisnisAdmin";
$data = getRegistran($link);
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
                                <th>Email Penerbit</th>
                                <th>Kode Bisnis</th>
                                <th>Nama Bisnis</th>
                                <th>Dana</th>
                                <th>Estimasi</th>
                                <th>Lokasi</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_POST['delete'])) {
                                $id_bisnis = $_POST['id_bisnis'];
                                $link = "getDeleteBisnis&id_bisnis=" . urlencode($id_bisnis);
                                $delete = getRegistran($link, $id_bisnis);
                                if (!$delete) {
                                    echo "<script>alert('Data berhasil dihapus');window.location='pengajuan-bisnis.php'</script>";
                                } else {
                                    echo "<script>alert('Data gagal dihapus');window.location='pengajuan-bisnis.php'</script>";
                                }
                            }
                            ?>
                            <?php foreach ($data->data as $array_item) : ?>
                                <tr>
                                    <td><?php echo $array_item->email; ?></td>
                                    <td><?php echo $array_item->kode_bisnis; ?></td>
                                    <td><?php echo $array_item->nama_bisnis; ?></td>
                                    <td><?php echo $array_item->dana; ?></td>
                                    <td><?php echo $array_item->estimasi; ?></td>
                                    <td><?php echo $array_item->lokasi; ?></td>
                                    <td class="text-center">
                                        <?php
                                        if ($array_item->status == 'diterima') { ?>
                                            <span class="badge bg-success">Diterima</span>
                                        <?php  } elseif ($array_item->status == 'ditolak') { ?>
                                            <span class="badge bg-danger">Ditolak</span>
                                        <?php } else { ?>
                                            <span class="badge bg-warning">Diproses</span>
                                        <?php } ?>



                                    </td>
                                    <td class="text-center d-flex mt-3">
                                        <a class="btn btn-warning" href="edit-pengajuan-bisnis.php?id=<?php echo $array_item->id_bisnis; ?>"><i class="bi bi-pencil-square"></i></a>
                                        <form action="" method="POST">
                                            <input type="hidden" name="id_bisnis" value="<?php echo $array_item->id_bisnis; ?>">
                                            <button type="submit" name="delete" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                        </form>
                                        <!-- <span class="badge bg-danger">Delete</span> -->
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
    <?php include "footer.php"; ?>