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
        <p class="mb-1 text-white">Welcome to Affan!</p><small class="d-block">Click the "Add to Home Screen" button
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
  if ($_SESSION['lengkap'] == '0') {?>
    
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
  <div class="container direction-rtl">
    <div class="card mb-3">
      <div class="card-body">
        <div class="row g-3">
          <div class="col-4">
            <div class="feature-card mx-auto text-center">
              <div class="card mx-auto bg-gray"><img src="img/demo-img/pwa.png" alt=""></div>
              <p class="mb-0">PWA Ready</p>
            </div>
          </div>
          <div class="col-4">
            <div class="feature-card mx-auto text-center">
              <div class="card mx-auto bg-gray"><img src="img/demo-img/bootstrap.png" alt=""></div>
              <p class="mb-0">Bootstrap 5</p>
            </div>
          </div>
          <div class="col-4">
            <div class="feature-card mx-auto text-center">
              <div class="card mx-auto bg-gray"><img src="img/demo-img/js.png" alt=""></div>
              <p class="mb-0">Vanilla JS</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="card card-bg-img bg-img bg-overlay mb-3" style="background-image: url('img/bg-img/3.jpg')">
      <div class="card-body direction-rtl p-5">
        <h2 class="text-white">Reusable elements</h2>
        <p class="mb-4 text-white">More than 220+ reusable modern design elements. Just copy the code and paste it on
        your desired page.</p><a class="btn btn-warning" href="elements.html">All elements</a>
      </div>
    </div>
  </div>
  <div class="container direction-rtl">
    <div class="card mb-3">
      <div class="card-body">
        <div class="row g-3">
          <div class="col-4">
            <div class="feature-card mx-auto text-center">
              <div class="card mx-auto bg-gray"><img src="img/demo-img/sass.png" alt=""></div>
              <p class="mb-0">SCSS</p>
            </div>
          </div>
          <div class="col-4">
            <div class="feature-card mx-auto text-center">
              <div class="card mx-auto bg-gray"><img src="img/demo-img/pug.png" alt=""></div>
              <p class="mb-0">PUG</p>
            </div>
          </div>
          <div class="col-4">
            <div class="feature-card mx-auto text-center">
              <div class="card mx-auto bg-gray"><img src="img/demo-img/npm.png" alt=""></div>
              <p class="mb-0">NPM</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
            <h3>Bisnis Berlangsung</h3>
          </div>
          <div class="col-6 d-md-flex justify-content-md-end">
            <button class="btn btn-outline-info" type="button">Selengkapnya</button>
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

        <?php foreach ($bisnis as $key => $value): ?>


          <div class="testimonial-slide-three-wrapper">
            <div class="testimonial-slide3 testimonial-style3">
              <!-- Single Testimonial Slide -->

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
          <?php
          $link = "getArtikel";
          $output = getRegistran($link);
          foreach ($output->data as $array_item) {
            echo '<div class="card single-product-card">';
            echo ' <div class="card-body">';
            echo '<div class="d-flex align-items-center">';
            echo '<div class="card-side-img">';
            echo '<a class="product-thumbnail d-block" href="detail-artikel.php?id=' . $array_item->id . '">';
            echo '<img src="admin/image/' . $array_item->gambar . '" />';
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

  <div class="container direction-rtl mt-2">
    <div class="card">
      <div class="card-body">
        <div class="row g-3">
          <div class="col-4">
            <div class="feature-card mx-auto text-center">
              <div class="card mx-auto bg-gray"><i class="bi bi-star text-warning"></i></div>
              <p class="mb-0">Best Rated</p>
            </div>
          </div>
          <div class="col-4">
            <div class="feature-card mx-auto text-center">
              <div class="card mx-auto bg-gray">
                <svg class="bi bi-award text-success" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z">
                  </path>
                  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"></path>
                </svg>
              </div>
              <p class="mb-0">Elegant</p>
            </div>
          </div>
          <div class="col-4">
            <div class="feature-card mx-auto text-center">
              <div class="card mx-auto bg-gray">
                <svg class="bi bi-lightning-charge text-primary" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z">
                  </path>
                </svg>
              </div>
              <p class="mb-0">Trendsetter</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pb-3"></div>
</div>
<?php include 'footer.php'; ?>