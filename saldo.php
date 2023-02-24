<?php include 'header.php'; ?>
<div class="container" style="margin-top: 5%;">
  <!-- Element Heading -->
  <div class="element-heading">
    <!-- <h6>Price Table 02</h6> -->
  </div>
</div>
<div class="container">
  <div class="card ">
    <div class="card-body">
      <!-- Price Table Two -->
      <div class="price-table-two d-flex align-items-center">
        <!-- Single Price Table -->
        <div class="single-price-table active-effect active">
          <div class="text">
            <h6 class="fz-20">Henry Herdiyanto</h6>
            <!-- <span class="badge bg-primary rounded-pill">Save 16%</span> -->
          </div>
          <div class="price">
            <h6 class="fz-20 text-white">Saldo :</h6>
            <h3>Rp. 10.000.000</h3><span class="fz-12">Penerbit</span>
          </div>
          <div class="purchase">
            <div class="form-check">
              <input class="form-check-input form-check-warning mx-0 shadow" type="radio" name="exampleRadio" id="choosePlan2" checked>
              <label class="form-check-label" for="choosePlan2"></label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mt-5">
  <div class="card bg-primary bg-gradient">
    <div class="card-body">
      <div class="colorful-tab">
        <ul class="nav p-1 mb-3 shadow-sm" id="affanTab3" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="btn btn-primary active" id="creative-tab" data-bs-toggle="tab" data-bs-target="#creative" type="button" role="tab" aria-controls="creative" aria-selected="true">Creative</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="btn btn-primary" id="modern-tab" data-bs-toggle="tab" data-bs-target="#modern" type="button" role="tab" aria-controls="modern" aria-selected="false">Modern</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="btn btn-primary" id="latest-tab" data-bs-toggle="tab" data-bs-target="#latest" type="button" role="tab" aria-controls="latest" aria-selected="false">Latest</button>
          </li>
        </ul>
        <div class="tab-content shadow-sm p-3" id="affanTab3Content">
          <div class="tab-pane fade show active" id="creative" role="tabpanel" aria-labelledby="creative-tab">
            <h6 class="text-white">Creative design.</h6>
            <p class="mb-0 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
          </div>
          <div class="tab-pane fade" id="modern" role="tabpanel" aria-labelledby="modern-tab">
            <h6 class="text-white">Modern trends.</h6>
            <p class="mb-0 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
          </div>
          <div class="tab-pane fade" id="latest" role="tabpanel" aria-labelledby="latest-tab">
            <h6 class="text-white">Latest technology.</h6>
            <p class="mb-0 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>