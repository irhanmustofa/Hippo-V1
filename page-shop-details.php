<?php include 'header.php'; ?>
<div class="offcanvas offcanvas-start" id="affanOffcanvas" data-bs-scroll="true" tabindex="-1"
  aria-labelledby="affanOffcanvsLabel">
  <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas"
    aria-label="Close"></button>
  <div class="offcanvas-body p-0">
    <!-- Side Nav Wrapper -->
    <div class="sidenav-wrapper">
      <!-- Sidenav Profile -->
      <div class="sidenav-profile bg-gradient">
        <div class="sidenav-style1"></div>
        <!-- User Thumbnail -->
        <div class="user-profile"><img src="img/bg-img/2.jpg" alt=""></div>
        <!-- User Info -->
        <div class="user-info">
          <h6 class="user-name mb-0">Affan Islam</h6><span>CEO, Designing World</span>
        </div>
      </div>
      <!-- Sidenav Nav -->
      <ul class="sidenav-nav ps-0">
        <li><a href="page-home.html"><i class="bi bi-house-door"></i>Home</a></li>
        <li><a href="elements.html"><i class="bi bi-folder2-open"></i>Elements<span
              class="badge bg-danger rounded-pill ms-2">220+</span></a></li>
        <li><a href="pages.html"><i class="bi bi-collection"></i>Pages<span
              class="badge bg-success rounded-pill ms-2">100+</span></a></li>
        <li><a href="#"><i class="bi bi-cart-check"></i>Shop</a>
          <ul>
            <li><a href="page-shop-grid.html">Shop Grid</a></li>
            <li><a href="page-shop-list.html">Shop List</a></li>
            <li><a href="page-shop-details.html">Shop Details</a></li>
            <li><a href="page-cart.html">Cart</a></li>
            <li><a href="page-checkout.html">Checkout</a></li>
          </ul>
        </li>
        <li><a href="settings.html"><i class="bi bi-gear"></i>Settings</a></li>
        <li>
          <div class="night-mode-nav"><i class="bi bi-moon"></i>Night Mode
            <div class="form-check form-switch">
              <input class="form-check-input form-check-success" id="darkSwitch" type="checkbox">
            </div>
          </div>
        </li>
        <li><a href="page-login.html"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
      </ul>
      <!-- Social Info -->
      <div class="social-info-wrap"><a href="#"><i class="bi bi-facebook"></i></a><a href="#"><i
            class="bi bi-twitter"></i></a><a href="#"><i class="bi bi-linkedin"></i></a></div>
      <!-- Copyright Info -->
      <div class="copyright-info">
        <p>2021 &copy; Made by<a href="#">Designing World</a></p>
      </div>
    </div>
  </div>
</div>
<div class="page-content-wrapper py-3">
  <div class="container">
    <div class="card product-details-card mb-3"> <span
        class="badge bg-warning text-dark position-absolute product-badge">Sale -10%</span>
      <div class="card-body">
        <div class="product-gallery-wrapper">
          <div class="product-gallery"><a href="img/bg-img/p1.jpg"><img class="rounded" src="asset/img/bg-img/p1.jpg"
                alt=""></a><a href="asset/img/bg-img/p2.jpg"><img class="rounded" src="asset/img/bg-img/p2.jpg" alt=""></a><a
              href="asset/img/bg-img/p3.jpg"><img class="rounded" src="asset/img/bg-img/p3.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
    <div class="card product-details-card mb-3 direction-rtl">
      <div class="card-body">
        <h3>Nama Bisnis</h3>
        <h1>$9.89</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum dolores natus laboriosam accusantium.</p>
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
                <!-- Product Thumbnail --><a class="product-thumbnail d-block" href="page-shop-details.html"><img
                    src="img/bg-img/p1.jpg" alt="">
                  <!-- Badge --><span class="badge bg-primary">Sale</span></a>
                <!-- Product Title --><a class="product-title d-block text-truncate"
                  href="page-shop-details.html">Wooden Tool</a>
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
                <!-- Product Thumbnail --><a class="product-thumbnail d-block" href="page-shop-details.html"><img
                    src="img/bg-img/p2.jpg" alt="">
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