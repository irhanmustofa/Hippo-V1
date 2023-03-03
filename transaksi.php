<?php include 'header.php'; ?>

<div class="page-content-wrapper py-3">
  <div class="container">

    <div class="card product-details-card mb-3 direction-rtl">
      <div class="card-body">
        <div class="standard-tab">
          <ul class="nav rounded-lg mb-2 p-2 shadow-sm" id="affanTabs1" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="btn active" id="pembelian-tab" data-bs-toggle="tab" data-bs-target="#pembelian" type="button" role="tab" aria-controls="pembelian" aria-selected="true">Pembelian</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="btn" id="penjualan-tab" data-bs-toggle="tab" data-bs-target="#penjualan" type="button" role="tab" aria-controls="penjualan" aria-selected="false">Penjualan</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="btn" id="pasar-tab" data-bs-toggle="tab" data-bs-target="#pasar" type="button" role="tab" aria-controls="pasar" aria-selected="false">Pasar Sekunder</button>
            </li>
          </ul>
          <div class="tab-content rounded-lg p-3 shadow-sm" id="affanTabs1Content">
            <div class="tab-pane fade show active" id="pembelian" role="tabpanel" aria-labelledby="pembelian-tab">

              <div class="container">
                <div class="card">
                  <div class="card-body text-center p-5"><img class="mb-4" style="width: 20rem;" src="asset/img/bg-img/hipopotamus.png" alt="">
                    <h3 class="mb-4">Belum ada transaksi</h3>
                    <a class="btn btn-creative btn-danger btn-lg" href="#">Mulai Investasi</a>
                  </div>
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="penjualan" role="tabpanel" aria-labelledby="penjualan-tab">

              <div class="container">
                <div class="card">
                  <div class="card-body text-center p-5"><img class="mb-4" style="width: 20rem;" src="asset/img/bg-img/hipopotamus.png" alt="">
                    <h3 class="mb-4">Belum ada transaksi</h3>
                    <a class="btn btn-creative btn-danger btn-lg" href="#">Mulai Investasi</a>
                  </div>
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="pasar" role="tabpanel" aria-labelledby="pasar-tab">


              <div class="card">
                <ul class="nav nav-tabs" id="bootstrapTab" role="tablist">
                  <li class="nav-item me-2" role="presentation">
                    <button class="nav-link active" id="tinjauan-tab" data-bs-toggle="tab" data-bs-target="#tinjauan" type="button" role="tab" aria-controls="tinjauan" aria-selected="true">Tinjauan</button>
                  </li>
                  <li class="nav-item me-2" role="presentation">
                    <button class="nav-link" id="permintaan-tab" data-bs-toggle="tab" data-bs-target="#permintaan" type="button" role="tab" aria-controls="permintaan" aria-selected="false">Permintaan</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="penawaran-tab" data-bs-toggle="tab" data-bs-target="#penawaran" type="button" role="tab" aria-controls="penawaran" aria-selected="false">Penawaran</button>
                  </li>
                </ul>
                <div class="tab-content p-3 border-top-0" id="bootstrapTabContent">
                  <div class="tab-pane fade show active" id="tinjauan" role="tabpanel" aria-labelledby="tinjauan-tab">
                    <h5>Riwayat Transaksi</h5>
                    <hr>
                    <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, impedit natus itaque fuga aperiam qui eos ut.</p>
                    <div class="container mt-3">
                      <div class="row justify-content-start">
                        


                            <!-- Single Price Table -->
                            <div class="col-6 single-price-content shadow-sm pt-2">
                              <div class="price">
                                <h5 class="bg-light text-dark rounded-pill">Permintaan</h5>
                              </div>
                              <!-- Pricing Desc -->
                              <div class="pricing-desc">
                                <ul class="ps-0">
                                  <li><i class="bi bi-check-lg me-2"></i>6 Month Usage</li>
                                  <li><i class="bi bi-check-lg me-2"></i>Lifetime Updates</li>
                                  <li><i class="bi bi-check-lg me-2"></i>10 Website License</li>
                                  <li><i class="bi bi-check-lg me-2"></i>Free Support</li>
                                  <li class="times"><i class="bi bi-x-lg me-2"></i>Download New Release</li>
                                </ul>
                              </div>
                              <!-- Purchase -->
                              <div class="purchase"><a class="btn btn-light btn-lg btn-creative" href="#">Choose Plan</a></div>
                            </div>
                          

                        
                       

                          
                            <!-- Single Price Table -->
                            <div class="col-6 single-price-content shadow-sm pt-2">
                              <div class="price">
                                <h5 class="bg-light text-dark rounded-pill">Permintaan</h5>
                              </div>
                              <!-- Pricing Desc -->
                              <div class="pricing-desc">
                                <ul class="ps-0">
                                  <li><i class="bi bi-check-lg me-2"></i>6 Month Usage</li>
                                  <li><i class="bi bi-check-lg me-2"></i>Lifetime Updates</li>
                                  <li><i class="bi bi-check-lg me-2"></i>10 Website License</li>
                                  <li><i class="bi bi-check-lg me-2"></i>Free Support</li>
                                  <li class="times"><i class="bi bi-x-lg me-2"></i>Download New Release</li>
                                </ul>
                              </div>
                              <!-- Purchase -->
                              <div class="purchase"><a class="btn btn-light btn-lg btn-creative" href="#">Choose Plan</a></div>
                            </div>
                          

                        
                      </div>

                    </div>


                  </div>
                  <div class="tab-pane fade" id="permintaan" role="tabpanel" aria-labelledby="permintaan-tab">
                    <div class="container">
                      <div class="card">
                        <div class="card-body text-center p-5"><img class="mb-4" style="width: 20rem;" src="asset/img/bg-img/hipopotamus.png" alt="">
                          <h3 class="mb-4">Belum ada transaksi</h3>
                          <a class="btn btn-creative btn-danger btn-lg" href="#">Mulai</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="penawaran" role="tabpanel" aria-labelledby="penawaran-tab">
                    <div class="container">
                      <div class="card">
                        <div class="card-body text-center p-5"><img class="mb-4" style="width: 20rem;" src="asset/img/bg-img/hipopotamus.png" alt="">
                          <h3 class="mb-4">Belum ada transaksi</h3>
                          <a class="btn btn-creative btn-danger btn-lg" href="#">Mulai</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php include 'footer.php'; ?>