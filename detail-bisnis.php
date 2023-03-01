<?php
include "header.php";
include "koneksi.php";
$result = mysqli_query($connect, "SELECT * FROM artikel ");
$bisnis = mysqli_query($connect, "SELECT * FROM bisnis ");


?>
<?php foreach ($result as $key => $value) : ?>
  <div class="page-content-wrapper py-3">
    <div class="container">
      <div class="card product-details-card mb-3">
        <div class="card-body">
          <div class="product-gallery">
            <div class="product-gallery">
              <p><?php echo $value["tanggal"]; ?></p>
              <h1><?php echo $value["judul"]; ?></h1>
              <img style="width: 100%;" src="admin/image/<?php echo $value["gambar"]; ?>" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="card product-details-card mb-3 direction-rtl">
        <div class="card-body">
          <h5>Description</h5>
          <p><?php echo $value["deskripsi"] ?></p>
          <div class="rating-card-two mt-4">
            <!-- Rating result -->
            <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
              <div class="rating"><a href="#"><i class="bi bi-star-fill"></i></a><a href="#"><i class="bi bi-star-fill"></i></a><a href="#"><i class="bi bi-star-fill"></i></a><a href="#"><i class="bi bi-star-fill"></i></a><a href="#"><i class="bi bi-star-half"></i></a></div><span>4.44 out of 5 ratings</span>
            </div>
            <!-- Rating Details -->
            <div class="rating-detail">
              <!-- Single Rating Details -->
              <div class="d-flex align-items-center mt-2"><span>5 star</span>
                <div class="progress-bar-wrapper">
                  <div class="progress">
                    <div class="progress-bar bg-warning" style="width: 78%;" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span>78%</span>
              </div>
              <!-- Single Rating Details -->
              <div class="d-flex align-items-center mt-2"><span>4 star</span>
                <div class="progress-bar-wrapper">
                  <div class="progress">
                    <div class="progress-bar bg-warning" style="width: 14%;" role="progressbar" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span>14%</span>
              </div>
              <!-- Single Rating Details -->
              <div class="d-flex align-items-center mt-2"><span>3 star</span>
                <div class="progress-bar-wrapper">
                  <div class="progress">
                    <div class="progress-bar bg-warning" style="width: 8%;" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span>8%</span>
              </div>
              <!-- Single Rating Details -->
              <div class="d-flex align-items-center mt-2"><span>2 star</span>
                <div class="progress-bar-wrapper">
                  <div class="progress">
                    <div class="progress-bar bg-warning" style="width: 0%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span>0%</span>
              </div>
              <!-- Single Rating Details -->
              <div class="d-flex align-items-center mt-2"><span>1 star</span>
                <div class="progress-bar-wrapper">
                  <div class="progress">
                    <div class="progress-bar bg-warning" style="width: 0%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span>0%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach ?>

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
                  <a class="product-thumbnail d-block" href="page-shop-details.html">
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