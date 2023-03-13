<?php
include 'header2.php';
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

$ambil_pendana = $connect -> query("SELECT DISTINCT email_pendana FROM pendanaan WHERE id_bisnis='$id'");
$jumlah_pendana = mysqli_num_rows($ambil_pendana);


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
					<!-- Price Table One -->
					<div class="price-table-one">
						<div class="tab-content" id="priceTabContent">
							<div class="tab-pane fade show active" id="priceTab_Two" role="tabpanel" aria-labelledby="priceTabTwo">
								<!-- Single Price Table -->
								<div class="single-price-content shadow-sm">
									<div class="price"><span class="text-white mb-2">Dana Terkumpul</span>
										<h2 class="display-3" style="font-size: 40px ">Rp. <?php echo number_format($total,0,",","."); ?></h2><span class="badge bg-light text-dark rounded-pill">Dana Target Rp. <?php echo number_format($dana,0,",","."); ?></span>
									</div>
									<!-- Pricing Desc -->
									<div class="pricing-desc">
										<ul class="ps-0">
											<li><i class="bi bi-circle me-2"></i>Hari Berjalan : </li>
											<label class="text-white">Lama Hari</label>
											<li><i class="bi bi-circle me-2"></i>Jumlah Pendana :</li>
											<label class="text-white"><?php echo $jumlah_pendana ?></label>
										</ul>
									</div>
									<!-- Purchase -->
									<div class="purchase">
										<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
											<div class="progress-bar bg-warning" style="width: <?php echo $persentase ?>%"><?php echo $persentase ?>%</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>