<?php

session_start();
include 'header.php';
require_once 'utility.php';
$error = "";

$email = $_SESSION['email'];
$link = "getProfile&email=".urlencode($email);

$data = getRegistran($link);



?>
    <div class="page-content-wrapper py-3">
      <div class="container">
        <!-- User Information-->
        <div class="card user-info-card mb-3">
          <div class="card-body d-flex align-items-center">
            <div class="user-profile me-3"><img src="asset/img/bg-img/7.jpg" alt="" style="height:100%"><i class="bi bi-pencil"></i>
              <form action="#">
                <input class="form-control" type="file">
              </form>
            </div>
            <div class="user-info">
              <div class="d-flex align-items-center">
                <h5 class="mb-1"><?php echo ($data->data[0]->nama) ?></h5>
              </div>
              <a href="update-profile.php"><p class="mb-0"> Lihat Profil <i class="bi bi-chevron-right"></i> </p></a>
            </div>
          </div>
        </div>
        <!-- User Meta Data-->
        <div class="card ">
          <div class="card-body">
            <!-- Price Table Two -->
            <div class="price-table-two d-flex align-items-center">
              <!-- Single Price Table -->
              <div class="single-price-table active-effect active">
                <div class="text">
                  <h6 class="fz-20">Saldo Tersisa</h6>
                  <!-- <span class="badge bg-primary rounded-pill">Save 16%</span> -->
                </div>
                <div class="price">
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
            <div class="container direction-rtl">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row g-3">
                    <div class="col-4">
                      <a href="#">
                        <div class="feature-card mx-auto text-center">
                          <div class="card mx-auto bg-gray">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
                              <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
                            </svg>
                          </div>
                          <p class="mb-0">Deposit</p>
                        </div>
                      </a>
                    </div>
                    <div class="col-4">
                      <a href="#">
                        <div class="feature-card mx-auto text-center">
                          <div class="card mx-auto bg-gray">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                              <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                              <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                            </svg>
                          </div>
                          <p class="mb-0">Tarik</p>
                        </div>
                      </a>
                    </div>
                    <div class="col-4">
                    <a href="#">
                        <div class="feature-card mx-auto text-center">
                          <div class="card mx-auto bg-gray">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                              <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                              <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                              <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                          </div>
                          <p class="mb-0">Riwayat</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
include "footer.php";

?>