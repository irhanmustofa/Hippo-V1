<?php
include "header.php";

require_once "../utility.php";

$id = $_GET["id"];

$link = "getUserId&id_user=" . urlencode($id);
$user = getRegistran($link);
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
					<h3>Aktivasi User Baru</h3>
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
								<label for="basicInput">Nama</label>
								<input type="text" class="form-control" id="basicInput" value="<?php echo $user->data[0]->nama ?>" disabled>
							</div>

							<div class="form-group">
								<label for="helpInputTop">Email</label>
								<input type="text" class="form-control" value="<?php echo $user->data[0]->email; ?>" disabled>
							</div>

							<div class="form-group">
								<label for="helperText">No Identitas</label>
								<input type="text" id="helperText" class="form-control" value="<?php echo $user->data[0]->no_identitas; ?>" disabled>
							</div>
							<div class="form-group">
								<label for="disabledInput">Foto Kartu Identitas</label>
								<div class="card" style="width: 20rem;">
									<img src="../asset/img/ktp/<?php echo $user->data[0]->foto_ktp; ?>" class="card-img-top" alt="..." disabled>
								</div>
							</div>


						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="helperText">No NPWP</label>
								<input type="text" id="helperText" class="form-control" value="<?php echo $user->data[0]->no_npwp; ?>" disabled>
							</div>
							<div class="form-group">
								<label for="disabledInput">Foto NPWP</label>
								<div class="card" style="width: 20rem;">
									<img src="../asset/img/npwp/<?php echo $user->data[0]->foto_npwp; ?>" class="card-img-top" alt="...">
								</div>
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
												<option value="aktif">Aktif</option>
												<option value="nonaktif">Nonaktif</option>
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
					$link = "setAktivasiUser&id_user=" . urlencode($id) . "&status=" . urlencode($status);
					$data = getRegistran($link);
					echo "<script>alert ('Data Berhasil Diupdate')</script>";
					echo "<script>location = 'aktivasi-user.php'</script>";
				}
			}
			include "footer.php";
		?>