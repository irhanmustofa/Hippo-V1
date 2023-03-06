<?php
include 'header.php';
require_once "utility.php";

$id = $_GET['id'];
$link = "getBisnisDetail&id_bisnis=" . urlencode($id);
echo ($link);
$output = getRegistran($link);

$email = $_SESSION['email'];
$link = "getProfile&email=" . urlencode($email);
// echo $link;
$data = getRegistran($link);

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
              <button class="btn" id="kategori-tab" data-bs-toggle="tab" data-bs-target="#kategori" type="button" role="tab" aria-controls="kategori" aria-selected="false">Kategori</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="btn" id="lokasi-tab" data-bs-toggle="tab" data-bs-target="#lokasi" type="button" role="tab" aria-controls="lokasi" aria-selected="false">Lokasi</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="btn" id="simulasi-tab" data-bs-toggle="tab" data-bs-target="#simulasi" type="button" role="tab" aria-controls="simulasi" aria-selected="false">Simulasi Investasi</button>
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
            <div class="tab-pane fade" id="kategori" role="tabpanel" aria-labelledby="kategori-tab">
              <h6>Kategori</h6>
              <h6 class="mb-0"><i class="bi bi-justify me-2"></i>Kategori Bisnis <br></h6>
              <p><?php echo ($output->data[0]->kategori); ?></p>
              <h6 class="mb-0"><i class="bi bi-envelope me-2"></i>Email Penerbit <br> </h6>
              <p><?php echo ($output->data[0]->email); ?></p>
              <h6 class="mb-0"><i class="bi bi-newspaper me-2"></i>Sistem Pengelolaan <br> </h6>
              <p><?php echo ($output->data[0]->sistem_pengolahan); ?></p>
              <h6 class="mb-0"><i class="bi bi-bar-chart-line-fill me-2"></i>Skema Bisnis <br> </h6>
              <p><?php echo ($output->data[0]->skema_bisnis); ?></p>
              <h6 class="mb-0"><i class="bi bi-card-heading me-2"></i>Minimum Investasi <br></h6>
              <p><?php echo ($output->data[0]->minimum_invest); ?></p>
              <h6 class="mb-0"><i class="bi bi-cash me-2"></i>Target Investasi <br></h6>
              <p><?php echo ($output->data[0]->dana); ?></p>
            </div>
            <div class="tab-pane fade" id="lokasi" role="tabpanel" aria-labelledby="lokasi-tab">
              <h6>Lokasi</h6>
              <p class="mb-0"><?php echo ($output->data[0]->lokasi); ?></p>
            </div>
            <div class="tab-pane fade" id="simulasi" role="tabpanel" aria-labelledby="simulasi-tab">
              <h6>Simulasi</h6>
              <p class="mb-0"><?php echo ($output->data[0]->deskripsi); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card user-info-card mb-3">
      <div class="card-body d-flex align-items-center">
        <div class="user-profile me-3"><img src="asset/img/profile/<?php echo ($data->data[0]->foto_profil) ?>" alt="" style="height:100%"></div>
        <div class="user-info">
          <div class="d-flex align-items-center">
            <h5 class="mb-1"><?php echo ($data->data[0]->nama) ?></h5>
          </div>
          <p class="mb-0">Keterangan</p></a>
        </div>
      </div>
    </div>

    <div class="card product-details-card mb-3 direction-rtl">
      <div class="card-body">
        <h5>Description</h5>
        <p><?php echo ($output->data[0]->deskripsi); ?></p>
        <div class="rating-card-two mt-4">
          <!-- Rating Details -->
          <div class="rating-detail">
            <div class="d-flex align-items-center mt-4">
              <a href="join-invest.php?id=<?php echo $id ?>"><button class="btn btn-primary">Invest Now</button></a>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="card related-product-card direction-rtl">
      <div class="card-body">
        <h5 class="mb-3">Bisnis Terkait</h5>
        <div class="row g-3 justify-content-center">
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
              'lokasi' => $array_item->lokasi,
              'kategori' => $array_item->kategori,
              'email' => $array_item->email,
              'sistem_pengolahan' => $array_item->sistem_pengolahan,
              'skema_bisnis' => $array_item->skema_bisnis,
              'minimum_invest' => $array_item->minimum_invest,
            );
          }
          ?>
          <?php foreach ($bisnis as $key => $value) : ?>

            <!-- Single Top Product Card -->
            <div class="col-6 col-sm-4 col-lg-3">
              <div class="card single-product-card border">
                <div class="card-body p-3">
                  <!-- Product Thumbnail --><a class="product-thumbnail d-block" href="page-shop-details.html"><img src="image/<?php echo $value["gambar"]; ?>" alt="">
                    <!-- Badge --><span class="badge bg-primary">Sale</span></a>
                  <!-- Product Title --><a class="product-title d-block text-truncate" href="page-shop-details.html"><?php echo $value["nama_bisnis"];  ?></a>
                  <!-- Product Price -->
                  <span class="card-text"><?php echo $value["deskripsi"]; ?></span><br>
                  <a href="detail-bisnis.php?id=<?php echo $value["id_bisnis"]; ?>" class="btn btn-primary mt-2">Detail</a>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>