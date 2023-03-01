<?php
include 'header.php';
require_once 'utility.php';
$error = "";

$email = $_SESSION['email'];
$link = "getProfile&email=" . urlencode($email);
// echo $link;
$id = $_GET['id'];
$data = getRegistran($link);
// var_dump($data); 

?>
<div class="page-content-wrapper py-3">
  <div class="container">
    <?php
    $link = "getArtikelDetail&id=" . urlencode($id);
    $output = getRegistran($link);
    ?>
    <div class="card product-details-card mb-3">
      <div class="card-body">
        <div class="product-gallery">
          <div class="product-gallery">
            <p><?php echo ($output->data[0]->tanggal) ?></p>
            <p><?php echo ($output->data[0]->judul) ?></p>
            <img style="width: 100%;" src="admin/image/<?php echo ($output->data[0]->gambar) ?>" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="card product-details-card mb-3 direction-rtl">
      <div class="card-body">
        <h5>Description</h5>
        <p><?php echo ($output->data[0]->deskripsi) ?></p>
      </div>
    </div>

    <?php
    $link = "getBisnis";
    $output = getRegistran($link);
    foreach ($output->data as $array_item) {
      $bisnis[] = array(
        'id_bisnis' => $array_item->id_bisnis,
        'kode_bisnis' => $array_item->kode_bisnis,
        'nama_bisnis' => $array_item->nama_bisnis,
        'deskripsi' => $array_item->deskripsi,
        'dana' => $array_item->dana,
        'estimasi' => $array_item->estimasi,
        'gambar' => $array_item->gambar,
      );
    }
    ?>
    <?php foreach ($bisnis as $key => $value) : ?>
      <div class="card related-product-card direction-rtl">
        <div class="card-body">
          <h5 class="mb-3">Related Products</h5>
          <div class="row g-3">
            <!-- Single Top Product Card -->
            <div class="col-6 col-sm-4 col-lg-3">
              <div class="card single-product-card border">
                <div class="card-body p-3">
                  <!-- Product Thumbnail -->
                  <a class="product-thumbnail d-block" href="page-shop-details.php?id=<?php echo $value["id_bisnis"];?>">
                    <img style="width: 100%;" src=image/<?php echo $value["gambar"]; ?> alt="">
                    <!-- Badge -->
                    <span class="badge bg-primary">Sale</span>
                  </a>
                  <!-- Product Title -->
                  <a class="product-title d-block text-truncate" href="page-shop-details.html"><?php echo $value["nama_bisnis"]; ?></a>
                  <!-- Product Price -->
                  <span class="product-title d-inline-block text-truncate" style="max-width: 100px;"><?php echo $value["deskripsi"]; ?></span>
                  <a class="btn btn-danger btn-sm" href="#">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>
<?php include "footer.php" ?>