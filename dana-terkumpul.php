<?php
include 'header.php';
include "koneksi.php";
require_once "utility.php";
$email = $_SESSION['email'];
$link = "getProfile&email=" . urlencode($email);
$id = $_GET['id'];

$link = "getPendanaanByBisnis&id_bisnis=" . urlencode($id);
$data = getRegistran($link);

$link = "getBisnisId&id_bisnis=" . urlencode($id);
$data2 = getRegistran($link);
$dana = $data2->data[0]->dana;

//$total = mysqli_query($connect, "SELECT SUM(jumlah_invest) AS Total FROM pendanaan WHERE id_bisnis = '$id'");
//while ($row = $total -> fetch_assoc()){
//  echo $row['Total'];
//}
// Query untuk menjumlahkan data di tabel
$query = "SELECT SUM(jumlah_invest) as total FROM pendanaan WHERE id_bisnis = '$id'";

// Eksekusi query
$result = mysqli_query($connect, $query);

// Ambil nilai total dari hasil query
$row = mysqli_fetch_assoc($result);
$total = $row['total'];

$persentase = $total/$dana*100;
?>

<div class="page-content-wrapper py-3">
	<div class="container">
		<div class="card">


			<?php if ($data == NULL) { ?>
				<div class="card text-center">
					<div class="card-body">
						<h5 class="card-title"><b>Belum Ada Dana Terkumpul</b></h5>
					</div>
				</div>
			<?php } else { ?>
				<div class="card-body">
					<h1>Dana Terkumpul <span class="badge bg-secondary">Rp. <?php echo $total; ?></span></h1>

					<table class="w-100" id="dataTable">
						<thead>
							<tr>
								<th>Name</th>
								<th>Nomor Handphone</th>
								<th>Jumlah Invest</th>
							</tr>
						</thead>
						<tbody>

							<?php foreach ($data->data as $array_item) { ?>
								<tr>
									<td><?php echo $array_item->nama_pendana ?></td>
									<td><?php echo $array_item->no_hp ?></td>
									<td>Rp . <?php echo $array_item->jumlah_invest ?></td>
								</tr>

							<?php } ?>


						</tbody>
					</table>
					<h5>Dana target <span class="badge bg-secondary">Rp. <?php echo $data2->data[0]->dana; ?></span></h5><br>
					<h5>Progress Bar</h5>
					<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						<div class="progress-bar" style="width: <?php echo $persentase ?>%"><?php echo $persentase ?>%</div>
					</div>

				</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>