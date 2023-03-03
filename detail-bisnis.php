<?php
include 'header.php';
require_once "utility.php";

$id = $_GET['id'];
$link = "getBisnisDetail&id_bisnis=" . urlencode($id);
// echo($link);
$output = getRegistran($link);

?>
<div class="page-content-wrapper py-3">
  <div class="container">

    <div class="card product-details-card mb-3">
      <div class="card-body">
        <h1><?php echo ($output->data[0]->nama_bisnis); ?></h1>
        <div class="product-gallery-wrapper">
          <div class="product-gallery">
            <img class="rounded" src="image/<?php echo ($output->data[0]->gambar); ?>" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="card product-details-card mb-3 direction-rtl">
      <div class="card-body">
        <p>Dana dibutuhkan :</p>
        <h1><?php echo ($output->data[0]->dana); ?></h1>
      </div>
    </div>


    <div class="card product-details-card mb-3 direction-rtl">
      <div class="card-body">
        <div class="standard-tab">
          <ul class="nav rounded-lg mb-2 p-2 shadow-sm" id="affanTabs1" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="btn active" id="bootstrap-tab" data-bs-toggle="tab" data-bs-target="#bootstrap" type="button" role="tab" aria-controls="bootstrap" aria-selected="true">Finansial</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="btn" id="tentang-tab" data-bs-toggle="tab" data-bs-target="#tentang" type="button" role="tab" aria-controls="tentang" aria-selected="false">Tentang Bisnis</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="btn" id="dark-tab" data-bs-toggle="tab" data-bs-target="#dark" type="button" role="tab" aria-controls="dark" aria-selected="false">Kategori</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="btn" id="dark-tab" data-bs-toggle="tab" data-bs-target="#dark" type="button" role="tab" aria-controls="dark" aria-selected="false">Lokasi</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="btn" id="dark-tab" data-bs-toggle="tab" data-bs-target="#dark" type="button" role="tab" aria-controls="dark" aria-selected="false">Simulasi Investasi</button>
            </li>
          </ul>
          <div class="tab-content rounded-lg p-3 shadow-sm" id="affanTabs1Content">
            <div class="tab-pane fade show active" id="finansial" role="tabpanel" aria-labelledby="finansial-tab">
              <h6>Finansial</h6>
              <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="tab-pane fade" id="tentang" role="tabpanel" aria-labelledby="tentang-tab">
              <h6>Tentang Bisnis</h6>
              <p class="mb-0"><?php echo ($output->data[0]->deskripsi); ?></p>
            </div>
            <div class="tab-pane fade" id="dark" role="tabpanel" aria-labelledby="dark-tab">
              <h6>Dark Mode</h6>
              <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="tab-pane fade" id="dark" role="tabpanel" aria-labelledby="dark-tab">
              <h6>Dark Mode</h6>
              <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="tab-pane fade" id="dark" role="tabpanel" aria-labelledby="dark-tab">
              <h6>Dark Mode</h6>
              <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card user-info-card mb-3">
      <div class="card-body d-flex align-items-center">
        <div class="user-profile me-3"><img src="asset/img/bg-img/7.jpg" alt="" style="height:100%"></div>
        <div class="user-info">
          <div class="d-flex align-items-center">
            <h5 class="mb-1">Nama Penerbit</h5>
          </div>
          <p class="mb-0">Keterangan</p></a>
        </div>
      </div>
    </div>

    <div class="card product-details-card mb-3 direction-rtl">
      <div class="card-body">
        <h5>Description</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum soluta tempore tenetur provident eligendi
          porro, eius nulla? Aliquam, blanditiis id. Corporis.</p>
        <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At ut fugit accusantium quo quidem
          magni laboriosam!</p>
        <div class="rating-card-two mt-4">
          <!-- Rating Details -->
          <div class="rating-detail">
            <div class="d-flex align-items-center mt-4">
              <button class="btn btn-primary" type="submit">Invest Now</button>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="card related-product-card direction-rtl">
      <div class="card-body">
        <h5 class="mb-3">Bisnis Terkait</h5>
        <div class="row g-3">
          <!-- Single Top Product Card -->
          <div class="col-6 col-sm-4 col-lg-3">
            <div class="card single-product-card border">
              <div class="card-body p-3">
                <!-- Product Thumbnail --><a class="product-thumbnail d-block" href="page-shop-details.html"><img src="img/bg-img/p1.jpg" alt="">
                  <!-- Badge --><span class="badge bg-primary">Sale</span></a>
                <!-- Product Title --><a class="product-title d-block text-truncate" href="page-shop-details.html">Wooden Tool</a>
                <!-- Product Price -->
                <p class="sale-price">$9.89<span>$13.42</span></p><a class="btn btn-danger btn-sm" href="#">Add to
                  Cart</a>
              </div>
            </div>
          </div>
          <!-- Single Top Product Card -->
          <div class="col-6 col-sm-4 col-lg-3">
            <div class="card single-product-card border">
              <div class="card-body p-3">
                <!-- Product Thumbnail --><a class="product-thumbnail d-block" href="page-shop-details.html"><img src="img/bg-img/p2.jpg" alt="">
                  <!-- Badge --><span class="badge bg-primary">Sale</span></a>
                <!-- Product Title --><a class="product-title d-block text-truncate" href="page-shop-details.html">Atoms
                  Musk</a>
                <!-- Product Price -->
                <p class="sale-price">$3.36<span>$5.99</span></p><a class="btn btn-danger btn-sm" href="#">Add to
                  Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>