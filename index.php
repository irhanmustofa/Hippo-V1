<?php
include 'header.php';
require_once 'utility.php';
$error = "";

$email = $_SESSION['email'];
$link = "getProfile&email=" . urlencode($email);
// echo $link;
$data = getRegistran($link);
// var_dump($data); 

?>

<div class="page-content-wrapper">
  <!-- Welcome Toast -->
  <div class="toast toast-autohide custom-toast-1 toast-success home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
    <div class="toast-body">
      <svg class="bi bi-bookmark-check text-white" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z">
        </path>
        <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z">
        </path>
      </svg>
      <div class="toast-text ms-3 me-2">
        <p class="mb-1 text-white">Welcome <?php echo ($data->data[0]->nama) ?></p><small class="d-block">Click the "Add to Home Screen" button
        &amp; enjoy it like an app.</small>
      </div>
    </div>
    <button class="btn btn-close btn-close-white position-absolute p-1" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <!-- Tiny Slider One Wrapper -->
  <div class="tiny-slider-one-wrapper">
    <div class="tiny-slider-one">
      <!-- Single Hero Slide -->
      <div>
        <div class="single-hero-slide bg-overlay" style="background-image: url('img/bg-img/31.jpg')">
          <div class="h-100 d-flex align-items-center text-center">
            <div class="container">
              <h3 class="text-white mb-1">Build with Bootstrap 5</h3>
              <p class="text-white mb-4">Build fast, responsive sites with Bootstrap.</p><a class="btn btn-creative btn-warning" href="#">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Single Hero Slide -->
      <div>
        <div class="single-hero-slide bg-overlay" style="background-image: url('img/bg-img/33.jpg')">
          <div class="h-100 d-flex align-items-center text-center">
            <div class="container">
              <h3 class="text-white mb-1">Vanilla JavaScript</h3>
              <p class="text-white mb-4">The whole code is written with vanilla JS.</p><a class="btn btn-creative btn-warning" href="#">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Single Hero Slide -->
      <div>
        <div class="single-hero-slide bg-overlay" style="background-image: url('img/bg-img/32.jpg')">
          <div class="h-100 d-flex align-items-center text-center">
            <div class="container">
              <h3 class="text-white mb-1">PWA Ready</h3>
              <p class="text-white mb-4">Click the "Add to Home Screen" button &amp; <br> enjoy it like an app.</p><a class="btn btn-creative btn-warning" href="#">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Single Hero Slide -->
      <div>
        <div class="single-hero-slide bg-overlay" style="background-image: url('img/bg-img/33.jpg')">
          <div class="h-100 d-flex align-items-center text-center">
            <div class="container">
              <h3 class="text-white mb-1">Lots of Elements &amp; Pages</h3>
              <p class="text-white mb-4">Create your website in days, not months.</p><a class="btn btn-creative btn-warning" href="#">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Single Hero Slide -->
      <div>
        <div class="single-hero-slide bg-overlay" style="background-image: url('img/bg-img/1.jpg')">
          <div class="h-100 d-flex align-items-center text-center">
            <div class="container">
              <h3 class="text-white mb-1">Dark &amp; RTL Ready</h3>
              <p class="text-white mb-4">You can use the Dark or <br> RTL mode of your choice.</p><a class="btn btn-creative btn-warning" href="#">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  if ($_SESSION['lengkap'] == '0') { ?>

    <div class="pt-3"></div>
    <div class="container direction-rtl">
      <div class="card">
        <div class="card-header">
          Profil
        </div>
        <div class="card-body">
          <h5 class="card-title"><?php echo ($data->data[0]->nama) ?></h5>
          <p class="card-text">Silahkan lengkapi profil anda untuk bisa mulai investasi.</p>
          <a href="update-profile.php" class="btn btn-success">Lengkapi Profil</a>
        </div>
      </div>
    </div>
    <?php
  }
  ?>




  <div class="pt-3"></div>
  <div class="container direction-rtl mt-2">
    <div class="card">
      <div class="card-body">
        <div class="row g-3">
          <div class="col-4">
            <a href="#">
              <div class="feature-card mx-auto text-center">
                <div class="card mx-auto bg-gray"><i class="bi bi-telegram" style="color: #33a8da;"></i></div>
                <p class="mb-0">Telegram</p>
              </div>
            </a>
          </div>
          <div class="col-4">
            <a href="">
              <div class="feature-card mx-auto text-center">
                <div class="card mx-auto bg-gray">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram text-primary" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                  </svg>
                </div>
                <p class="mb-0">Instagram</p>
              </div>
            </a>
          </div>
          <div class="col-4">
            <a href="">
              <div class="feature-card mx-auto text-center">
                <div class="card mx-auto bg-gray">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp text-success" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                  </svg>
                </div>
                <p class="mb-0">Whatsapp</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pb-3"></div>

  <!-- Lts Go Modal -->
  <div class="modal fade" id="bootstrapBasicModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="exampleModalLabel">Pelajari Sebelum Mulai </h6>
          <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card text-center shadow" style="background-color: #fff8f7;">
            <div class="card-header">
              Penerbit
            </div>
            <div class="card-body">
              <h5 class="card-title">Jadilah penerbit dan kembangkan bisnismu</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="perkenalan.php" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>

        <div class="modal-body">
          <div class="card text-center shadow" style="background-color: #fff8f7;">
            <div class="card-header">
              Mulai Sekarang
            </div>
            <div class="card-body">
              <h5 class="card-title">Mulai sekarang</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="index.php" class="btn btn-primary">Go Start</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="container">
    <div class="card mb-3 bg-img " style="background-image: url('./asset/img/core-img/1.png'); background-color: #f7645a;">
      <div class="card-body direction-rtl p-5">
        <h4 class="text-white">Belajar Dulu Yuuk !</h4>
        <p class="mb-4 text-white">Pelajari dan jelajahi fitur dari Hippo.</p>
        <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#bootstrapBasicModal">Lets Go!</button>
      </div>
    </div>
  </div>


  <div class="container direction-rtl">
    <div class="card mb-3">
      <div class="card-body">
        <div class="row g-3">
          <div class="col-4">
            <div class="feature-card mx-auto text-center">
              <div class="card mx-auto bg-gray"><img src="img/demo-img/gulp.png" alt=""></div>
              <p class="mb-0">Gulp 4</p>
            </div>
          </div>
          <div class="col-4">
            <div class="feature-card mx-auto text-center">
              <div class="card mx-auto bg-gray"><i class="bi bi-moon text-dark"></i></div>
              <p class="mb-0">Dark Mode</p>
            </div>
          </div>
          <div class="col-4">
            <div class="feature-card mx-auto text-center">
              <div class="card mx-auto bg-gray"><i class="bi bi-box-arrow-left text-info"></i></div>
              <p class="mb-0">RTL Ready</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="card mb-3">
      <div class="card-body">
        <div class="row">
          <div class="col-6">
            <h4>Bisnis Berlangsung</h4>
          </div>
          <div class="col-6 d-md-flex justify-content-md-end">
            <a href="all-bisnis.php" class="btn btn-outline-info" type="button">Selengkapnya</a>
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
            'lokasi' => $array_item->lokasi,
            'kategori' => $array_item->kategori,
            'email' => $array_item->email,
            'sistem_pengolahan' => $array_item->sistem_pengolahan,
            'skema_bisnis' => $array_item->skema_bisnis,
            'minimum_invest' => $array_item->minimum_invest,
          );
        }
        ?>


        <div class="testimonial-slide-three-wrapper">
          <div class="testimonial-slide3 testimonial-style3">
            <!-- Single Testimonial Slide -->
            <?php foreach ($bisnis as $key => $value) : ?>

              <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="image/<?php echo $value["gambar"]; ?>" class="img-fluid rounded-start mt-4" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $value["nama_bisnis"];  ?></h5>
                      <span class="card-text"><?php echo $value["deskripsi"]; ?></span><br>
                      <a href="detail-bisnis.php?id=<?php echo $value["id_bisnis"]; ?>" class="btn btn-primary mt-2">Detail</a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach ?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Top Products-->
  <div class="top-products-area product-list-wrap">
    <div class="container">
      <div class="row g-3">
        <div class="col-12">
          <div class="section-heading">
            <h3 class="mx-4">Artikel HIPPO</h3>
            <?php
            $link = "getArtikel";
            $output = getRegistran($link);
            foreach ($output->data as $array_item) {
              echo '<div class="card single-product-card">';
              echo ' <div class="card-body">';
              echo '<div class="d-flex align-items-center">';
              echo '<div class="card-side-img">';
              echo '<a class="product-thumbnail d-block" href="detail-artikel.php?id=' . $array_item->id . '">';
              echo '<img style="width:200px;" src="admin/image/' . $array_item->gambar . '" />';
              echo '<span class="badge bg-primary">Sale</span></a></div>';
              echo '<div class="card-content px-4 py-2">';
              echo $array_item->judul . '<br>';
              echo $array_item->deskripsi . '<br> </div> </div> </div> </div>';
              // tambahkan kode untuk menampilkan data dalam array lainnya

              // foreach ($output as $row) {
              //     echo $row["kode_bisnis"];
              //     echo $row["nama_bisnis"];
              //     echo $row["deskripsi"];
              // }
              // echo ($output->data[0]->kode_bisnis) . '<br>';


            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container direction-rtl mt-2">
    <div class="card">
      <div class="card-body">
      <p class="text-center">Berizin dan diawasi oleh :</p>
        <div class="row g-3 text-center">
          <div class="col-6">
            <img src="asset/img/icons/logo_aludi.png" style="width: 18rem;">
          </div>
          <div class="col-6">
            <img src="asset/img/icons/OJK_logo.png" style="width: 18rem;">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pb-3"></div>
</div>
<?php include 'footer.php'; ?>