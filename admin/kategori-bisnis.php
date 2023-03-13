<?php
include "header.php";
$link = "getKategoriBisnis";
$data = getRegistran($link);


if (isset($_POST["simpan"])) {
	$kode_kategori = $_POST["kode_kategori"];
	$nama_kategori = $_POST["nama_kategori"];

	$link = "setKategoriBisnis&kode_kategori=" . urlencode($kode_kategori) . "&nama_kategori=" . urlencode($nama_kategori) . '&type=insert';
	$data = getRegistran($link);
	if ($data && $data->status == '1') {
		echo '<script>alert("data berhasil ditambah")</script>';
		echo ("<script>location.href = 'kategori-bisnis.php';</script>");
	}else{
		echo '<script>alert("data gagal ditambah")</script>';
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
					<h3>Kategori Bisnis</h3>
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
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#input-kategori">
						Tambah Kategori Bisnis
					</button>

					<!-- Modal Input-->
					<div class="modal fade" id="input-kategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel">Input Kategori Bisnis</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<form method="post" action="">
									<div class="modal-body">
										<div class="mb-3">
											<label for="exampleInputEmail1" class="form-label">Kode Kategori</label>
											<input type="text" class="form-control" name="kode_kategori">
										</div>
										<div class="mb-3">
											<label for="exampleInputPassword1" class="form-label">Nama Kategori</label>
											<input type="text" class="form-control" name="nama_kategori">
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
									</div>
								</form>
							</div>
						</div>
					</div>



				</div>
				<div class="card-body table-responsive">
					<table class="table table-striped table-hover" id="table1">
						<thead>
							<tr>
								<th>Kode Kategori</th>
								<th>Nama Kategori</th>
								<th>Action</th>
							</tr>
						</thead>
						<?php if ($data==NULL){ ?>

							<h1>Data Kosong</h1>
						<?php  } else{ ?>
							<tbody>

								<?php
								if (isset($_POST['delete'])) {
									$id_kategori = $_POST['id_kategori'];
									$link = "getDeleteKategoriBisnis&id_kategori=" . urlencode($id_kategori);
									$delete = getRegistran($link, $id_kategori);
									if (!$delete) {
										echo "<script>alert('Data berhasil dihapus');window.location='kategori-bisnis.php'</script>";
									} else {
										echo "<script>alert('Data gagal dihapus');window.location='kategori-bisnis.php'</script>";
									}
								}
								?>
								<?php foreach ($data->data as $array_item) : ?>
									<tr>
										<td><?php echo $array_item->kode_kategori; ?></td>
										<td><?php echo $array_item->nama_kategori; ?></td>

										<td class="text-center d-flex py-3">
											<a class="btn btn-warning" href="edit-kategori-bisnis.php?id=<?php echo $array_item->id_kategori; ?>"><i class="bi bi-pencil-square"></i></a>
											<form action="" method="POST">
												<input type="hidden" name="id_kategori" value="<?php echo $array_item->id_kategori; ?>">
												<button type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="bi bi-trash-fill"></i></button>
											</form>
											<!-- <span class="badge bg-danger">Delete</span> -->
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						<?php } ?>
					</table>
				</div>
			</div>

		</section>
	</div>
	<?php include "footer.php"; ?>