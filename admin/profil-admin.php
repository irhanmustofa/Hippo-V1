<?php include "header.php"; ?>

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
                    <h3>Update Profil</h3>
                    <p class="text-subtitle text-muted">Silahkan update profil anda.</p>
                </div>
                <!-- <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Input</li>
                    </ol>
                </nav>
            </div> -->
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Admin Profile</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form method="post">
                                <div class="form-group">
                                    <label for="basicInput">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="basicInput" value="<?php echo ($data->data[0]->nama_admin); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="helpInputTop">Password</label>
                                    <input type="text" class="form-control" id="" name="password">
                                    <p class="text-muted">Kosongkan Jika Password Tidak Diubah</p>
                                </div>

                                <div class="form-group">
                                    <label for="helperText">Email</label>
                                    <input type="text" name="email" class="form-control" value="<?php echo ($data->data[0]->email_admin); ?>">
                                </div>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-primary" name="simpan">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include "footer.php"; ?>
        <?php
        if (isset($_POST['simpan'])) {
            $nama = $_POST['nama'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            if ($data && $data->status == '1') {
                if (empty($_POST["password"])) {
                    $link = "setAdminNoPw&nama_admin=" . urlencode($nama) . "&email_admin=" . urlencode($email);
                    // echo $link;
                    $data = getRegistran($link);
                    // header('Location:index.php');
                } else {
                    $link = "setAdminPw&nama_admin=" . urlencode($nama) . "&email_admin=" . urlencode($email) . "&password=" . urlencode(md5($password));
                    // echo $link;
                    $data = getRegistran($link);
                    // header('Location:index.php');
                }
            }

            echo "<script>alert ('Data berhasil diubah')</script>";
            echo "<script>location = 'profil-admin.php'</script>";
        }


        ?>