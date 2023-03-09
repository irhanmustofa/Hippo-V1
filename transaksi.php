<?php 
include 'header.php';

require_once "utility.php";
$email = $_SESSION['email'];
$link = "getProfile&email=" . urlencode($email);
// echo $link;
$user = getRegistran($link);
 ?>

<div class="page-content-wrapper py-3">
  <div class="container">

    <div class="card product-details-card mb-3 direction-rtl">
      <div class="card-body">
        <div class="standard-tab">
          <ul class="nav rounded-lg mb-2 p-2 shadow-sm" id="affanTabs1" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="btn active" id="pembelian-tab" data-bs-toggle="tab" data-bs-target="#pembelian" type="button" role="tab" aria-controls="pembelian" aria-selected="true">Pembelian</button>
            </li>
            <!-- <li class="nav-item" role="presentation">
              <button class="btn" id="penjualan-tab" data-bs-toggle="tab" data-bs-target="#penjualan" type="button" role="tab" aria-controls="penjualan" aria-selected="false">Penjualan</button>
            </li> -->
            <li class="nav-item" role="presentation">
              <button class="btn" id="pasar-tab" data-bs-toggle="tab" data-bs-target="#pasar" type="button" role="tab" aria-controls="pasar" aria-selected="false">Pasar Sekunder</button>
            </li>
          </ul>
          <div class="tab-content rounded-lg p-3 shadow-sm" id="affanTabs1Content">

            <div class="tab-pane fade show active" id="pembelian" role="tabpanel" aria-labelledby="pembelian-tab">

              <?php 
              $link = "getTransaksiUser&email_pendana=" . urlencode($email);
              $output = getRegistran($link);
              if ($output == NULL) { ?>


                <div class="container">
                  <div class="card">
                    <div class="card-body text-center p-5"><img class="mb-4" style="width: 20rem;" src="asset/img/bg-img/hipopotamus.png" alt="">
                      <h3 class="mb-4">Belum ada transaksi</h3>
                      <a class="btn btn-creative btn-danger btn-lg" href="#">Mulai Investasi</a>
                    </div>
                  </div>
                </div>

              <?php } else{ ?>
                <?php foreach ($output->data as $array_item): ?>

                  <div class="card">
                    <div class="card-header">
                      <?php echo $array_item->waktu; ?>
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <p>Gabung Pendanaan dengan <?php echo $array_item->email_penerbit; ?></p>
                        <footer class="blockquote-footer"><cite title="Source Title">IDR <?php echo $array_item->jumlah_invest; ?></cite></footer>
                      </blockquote>
                    </div>
                  </div>
                <?php endforeach ?>

              <?php } ?>



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
                        <hr>



                        <!-- Single Price Table -->
                        <div class="col-6 single-price-content shadow-sm pt-2">
                          <div class="price">
                            <h6>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
                                <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                              </svg>
                            Permintaan</h6>
                          </div>
                          <!-- Pricing Desc -->
                          <div class="pricing-desc">
                            <ul class="ps-0">
                              <li>
                                <div>
                                  <p class="mb-0">Total Penawaran</p>
                                  <h6 class="mb-0">0 Lembar<br></h6>
                                  <h6 class="mb-3">0 Bisnis<br></h6>
                                </div>
                              </li>
                              <li>
                                <div>
                                  <p class="mb-0">Total Nilai</p>
                                  <h6 class="mb-3">Rp 0<br></h6>
                                </div>
                              </li>
                              <li>
                                <div>
                                  <p class="mb-0">Total Terjual</p>
                                  <h6 class="mb-3">Rp 0<br></h6>
                                </div>
                              </li>
                            </ul>
                          </div>

                        </div>

                        <!-- Single Price Table -->
                        <div class="col-6 single-price-content shadow-sm pt-2">
                          <div class="price">
                            <h6>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"/>
                                <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                              </svg>
                            Penawaran</h6>
                          </div>
                          <!-- Pricing Desc -->
                          <div class="">
                            <ul class="ps-0">
                              <li>
                                <div>
                                  <p class="mb-0">Total Penawaran</p>
                                  <h6 class="mb-0">0 Lembar<br></h6>
                                  <h6 class="mb-3">0 Bisnis<br></h6>
                                </div>
                              </li>
                              <li>
                                <div>
                                  <p class="mb-0">Total Nilai</p>
                                  <h6 class="mb-3">Rp 0<br></h6>
                                </div>
                              </li>
                              <li>
                                <div>
                                  <p class="mb-0">Total Terjual</p>
                                  <h6 class="mb-3">Rp 0<br></h6>
                                </div>
                              </li>
                            </ul>
                          </div>
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