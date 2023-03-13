<?php
include "header.php";

require_once "../utility.php";

$id = $_GET["id"];

$link = "getKategoriBisnisId&id_kategori=" . urlencode($id);
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
					<h3>Edit Kategori Bisnis</h3>
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
					<form method="post">
						<div class="row">
							<div class="col-md-6">

								<div class="form-group">
									<label for="helperText">Kode Kategori</label>
									<input type="text" class="form-control" name="kode_kategori" value="<?php echo $data->data[0]->kode_kategori; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="disabledInput">Lokasi</label>
									<input type="text" class="form-control" name="nama_kategori" value="<?php echo $data->data[0]->nama_kategori; ?>">
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
					</form>
				</div>
			</section>
			<?php

			if (isset($_POST["simpan"])) {
				$kode_kategori = $_POST["kode_kategori"];
				$nama_kategori = $_POST["nama_kategori"];
				$link = "setUpdateKategoriBisnis&id_kategori=" . urlencode($id) . "&kode_kategori=" . urlencode($kode_kategori) . "&nama_kategori=" . urlencode($nama_kategori);
				$data = getRegistran($link);

				if ($data && $data->status == '1') {
					
					echo "<script>alert ('Data berhasil diedit')</script>";
					echo "<script>location = 'kategori-bisnis.php'</script>";
				}
			}
			include "footer.php";
		?>