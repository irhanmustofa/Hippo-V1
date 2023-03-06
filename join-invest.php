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

?>


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
							<img src="image/<?php echo ($bisnis->data[0]->gambar);?>" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title"><?php echo ($bisnis->data[0]->nama_bisnis);?> (<?php echo ($bisnis->data[0]->kode_bisnis);?>)</h5>
								<p class="card-text"><?php echo ($bisnis->data[0]->deskripsi);?></p>
							</div>
						</div>
					</div>
				</div>

				<table class="table mb-0">
					<tbody>
						<tr>
							<th>Kategori :</th>
							<td><?php echo ($bisnis->data[0]->kategori);?></td>
						</tr>
						<tr>
							<th>Dana Dibutuhkan :</th>
							<td><?php echo ($bisnis->data[0]->dana);?></td>
						</tr>
						<tr>
							<th>Minimal Invest :</th>
							<td><?php echo ($bisnis->data[0]->minimum_invest);?></td>
						</tr>
						<tr>
							<th>Estimasi :</th>
							<td><?php echo ($bisnis->data[0]->estimasi);?></td>
						</tr>
						<tr>
							<th>Lokasi :</th>
							<td><?php echo ($bisnis->data[0]->lokasi);?></td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="card-body">
				<form action="#" method="GET">
					<div class="form-group">
						<label class="form-label" for="exampleInputText">Nama Pendana</label>
						<input class="form-control" name="nama" type="text" value="<?php echo ($user->data[0]->nama);?>" disabled>
					</div>
					<div class="form-group">
						<label class="form-label" for="exampleInputemail">Email Pendana</label>
						<input class="form-control" name="email" type="email" value="<?php echo $email?>" disabled>
					</div>
					<div class="form-group">
						<label class="form-label" for="exampleInputtelephone">Input telephone</label>
						<input class="form-control" name="no_hp" type="tel" >
					</div>
					<div class="form-group">
						<label class="form-label" for="exampleInputnumber">Minimum Invest</label>
						<input class="form-control" name="dana_invest" name="" value="<?php echo ($bisnis->data[0]->minimum_invest);?>">
					</div>
					<div class="form-group">
						<label class="form-label" for="exampleInputnumber">Input Jumlah Invest</label>
						<input class="form-control" name="dana_invest" type="number">
					</div>
					<div class="form-group">
						<label class="form-label" for="exampleInputnumber">Total Invest</label>
						<input class="form-control" name="dana_invest" type="number">
					</div>
					<div class="form-group">
						<label class="form-label" for="exampleInputText">Email Penerbit</label>
						<input class="form-control" name="nama" type="text" value="<?php echo ($bisnis->data[0]->email);?>" disabled>
					</div>

					<button class="btn btn-primary w-100 d-flex align-items-center justify-content-center" type="button">Send Message
						<svg class="bi bi-arrow-right-short" width="24" height="24" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
						</svg>
					</button>
				</form>
			</div>
		</div>
	</div>
</div>


<?php 
include "footer.php";

?>