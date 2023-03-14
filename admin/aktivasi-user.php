<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include "header.php";
$link = "getUserAll";
$output = getRegistran($link);
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
                                <th>No Identitas</th>
                                <th>No NPWP</th>
                                <th>Alamat</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <?php
                        if (isset($_POST['delete'])) {
                            $id_user = $_POST['id_user'];
                            $link = "getDeleteUser&id_user=" . urlencode($id_user);
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


                        <?php foreach ($output->data as $array_item) : ?>
                            <tr>
                                <td><?php echo $array_item->nama; ?></td>
                                <td><?php echo $array_item->email; ?></td>
                                <td><?php echo $array_item->no_identitas; ?></td>
                                <td><?php echo $array_item->no_npwp; ?></td>
                                <td><?php echo $array_item->alamat; ?></td>

                                <td class="text-center d-flex py-3">
                                    <a class="btn btn-warning" href="edit-konfirmasi-user.php?id=<?php echo $array_item->id_user; ?>"><i class="bi bi-pencil-square"></i></a>
                                    <form action="" method="POST">
                                        <input type="hidden" name="id_user" value="<?php echo $array_item->id_user; ?>">
                                        <button type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                    <!-- <span class="badge bg-danger">Delete</span> -->
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>

        </section>
    </div>
    <?php include "footer.php"; ?>