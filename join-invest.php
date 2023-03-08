<?php
include "header.php";

require_once "utility.php";

$id = $_GET["id"];

$link = "getBisnisDetail&id_bisnis=" . urlencode($id);
$bisnis = getRegistran($link);

$email = $_SESSION['email'];
$link = "getProfile&email=" . urlencode($email);
// echo $link;
$user = getRegistran($link);



if (isset($_POST['submit'])) {
	$id_bisnis = $_POST['id_bisnis'];
	$nama_pendana = $_POST['nama_pendana'];
	$email_pendana = $_POST['email_pendana'];
	$email_penerbit = $_POST['email_penerbit'];
	$no_hp = $_POST['no_hp'];
	$jumlah_invest = $_POST['jumlah_invest'];



	$link = "setPendanaan&id_bisnis=" . urlencode($id_bisnis) . "&nama_pendana=" . urlencode($nama_pendana) .
		'&email_pendana=' . urlencode($email_pendana) . '&email_penerbit=' . urlencode($email_penerbit) .
		'&no_hp=' . urlencode($no_hp) . '&jumlah_invest=' . urlencode($jumlah_invest) . '&type=insert';
	$data = getRegistran($link);
	if ($data && $data->status == '1') {
		echo '<script>alert("data berhasil ditambah")</script>';
		echo ("<script>location.href = 'portfolio-pendana.php';</script>");
	}
}

?>
<style>
	.spinner {
		cursor: pointer;
	}
</style>

<div class="page-content-wrapper py-3">
	<div class="container">
		<!-- Element Heading -->
		<div class="element-heading">
			<h6>Gabung Pendana</h6>
		</div>
	</div>
	<div class="container">
		<div class="card comparison-table-two">
			<div class="card-body">

				<div class="card mb-3" style="max-width: 100%;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="image/<?php echo ($bisnis->data[0]->gambar); ?>" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title"><?php echo ($bisnis->data[0]->nama_bisnis); ?> (<?php echo ($bisnis->data[0]->kode_bisnis); ?>)</h5>
								<p class="card-text"><?php echo ($bisnis->data[0]->deskripsi); ?></p>
							</div>
						</div>
					</div>
				</div>

				<table class="table mb-0">
					<tbody>
						<tr>
							<th>Kategori :</th>
							<td><?php echo ($bisnis->data[0]->kategori); ?></td>
						</tr>
						<tr>
							<th>Dana Dibutuhkan :</th>
							<td><?php echo ($bisnis->data[0]->dana); ?></td>
						</tr>
						<tr>
							<th>Minimal Invest :</th>
							<td><?php echo ($bisnis->data[0]->minimum_invest); ?></td>
						</tr>
						<tr>
							<th>Estimasi :</th>
							<td><?php echo ($bisnis->data[0]->estimasi); ?></td>
						</tr>
						<tr>
							<th>Lokasi :</th>
							<td><?php echo ($bisnis->data[0]->lokasi); ?></td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="card-body">
				<form action="#" method="post">
					<input class="form-control" name="id_bisnis" type="hidden" value="<?php echo $id; ?>">
					<div class="form-group">
						<label class="form-label" for="exampleInputText">Nama Pendana</label>
						<input class="form-control" name="nama_pendana" type="text" value="<?php echo ($user->data[0]->nama); ?>" readonly>
					</div>
					<div class="form-group">
						<label class="form-label" for="exampleInputemail">Email Pendana</label>
						<input class="form-control" name="email_pendana" type="email" value="<?php echo $email ?>" readonly>
					</div>
					<div class="form-group">
						<label class="form-label" for="exampleInputtelephone">No HP</label>
						<input class="form-control" name="no_hp" type="text">
					</div>
					<div class="form-group">
						<label class="form-label" for="exampleInputnumber">Minimum Invest</label>
						<input class="form-control" name="dana_invest" name="" value="<?php echo ($bisnis->data[0]->minimum_invest); ?>">
					</div>
					<!-- <label class="form-label" for="exampleInputnumber">Input Invest</label>
						<input class="nice-number" type="number" value="1" name=""> -->
					<!-- HTML code -->
					<!-- <div class="container">
						<form action="" method="post">
							<div class="form-group">
								<label for="quantity">Quantity:</label>
								<input type="number" class="form-control" id="quantity" name="quantity" min="1" max="10" required>
							</div>
							<div class="form-group">
								<label for="price">Price:</label>
								<input type="text" class="form-control" id="price" name="price" readonly>
							</div>
							<button type="submit" class="btn btn-primary">Calculate</button>
						</form>
					</div> -->


					<!-- <?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$quantity = $_POST["quantity"];
								$price = $quantity * 50000;
								echo "<script>document.getElementById('price').value='$price'</script>";
							}
							?> -->

					<div class="form-group">
						<label class="form-label" for="exampleInputnumber">Total Invest</label>
						<input class="form-control" name="jumlah_invest" type="text">
					</div>
					<div class="form-group">
						<label class="form-label" for="exampleInputText">Email Penerbit</label>
						<input class="form-control" name="email_penerbit" type="text" value="<?php echo ($bisnis->data[0]->email); ?>" readonly>
					</div>

					<button class="btn btn-primary w-100 d-flex align-items-center justify-content-center" type="submit" name="submit">Invest
						<svg class="bi bi-arrow-right-short" width="24" height="24" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
						</svg>
					</button>
				</form>
				<form>
					<div class="form-group">
						<label for="quantity">Quantity:</label>
						<input type="number" class="form-control" id="quantity" name="quantity" min="1" max="10" required>
					</div>
					<div class="form-group">
						<label for="price">Price:</label>
						<input type="text" class="form-control" id="price" name="price" readonly>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	const quantityInput = document.getElementById('quantity');
	const priceInput = document.getElementById('price');

	quantityInput.addEventListener('input', () => {
		const quantity = quantityInput.value;
		const price = quantity * 50000;
		priceInput.value = price;
	});
</script>
<!-- <script src="asset/js/jquery.nice-number.js"></script>
<script type="text/javascript">
	$('input[type="number"]').niceNumber({

		// auto resize the number input
		autoSize: true,

		// the number of extra character
		autoSizeBuffer: 1,

		// custom button text
		buttonDecrement: '-',
		buttonIncrement: "+",

		// 'around', 'left', or 'right'
		buttonPosition: 'around'

	});
</script> -->



<?php
include "footer.php";

?>