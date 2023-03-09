<?php
include 'header.php';

require_once "utility.php";
$email = $_SESSION['email'];
$link = "getProfile&email=" . urlencode($email);
$id = $_GET['id'];

$link = "getPendanaanByBisnis&id_bisnis=".urlencode($id);
$data = getRegistran($link);

//$total = mysqli_query($connect, "SELECT SUM(jumlah_invest) AS Total FROM pendanaan WHERE id_bisnis = '$id'");
//while ($row = $total -> fetch_assoc()){
//  echo $row['Total'];
//}
?>

<div class="page-content-wrapper py-3">
	<div class="container">
		<div class="card">
			<div class="card-body">
				<h1>Dana Terkumpul <span class="badge bg-secondary">10</span></h1>

				<table class="w-100" id="dataTable">
					<thead>
						<tr>
							<th>Name</th>
							<th>Nomor Handphone</th>
							<th>Jumlah Invest</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach ($data->data as $array_item){ ?>
							<tr>
								<td><?php echo $array_item->nama_pendana ?></td>
								<td><?php echo $array_item->no_hp ?></td>
								<td>Rp . <?php echo $array_item->jumlah_invest ?></td>
							</tr>

						<?php } ?>


					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>
