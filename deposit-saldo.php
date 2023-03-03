<?php
include 'header.php';

require_once "utility.php";
$email = $_SESSION['email'];
$link = "getProfile&email=" . urlencode($email);
?>



<div class="page-content-wrapper py-3">
    <div class="shop-pagination pb-3">
        <div class="container">
            <div class="card">
                <div class="card-body p-2">
                    <div class="align-items-center justify-content-between">
                        <div class="card user-info-card mb-3">
                            <h5 class="ms-1">Rekening Tujuan</h5>    
                            <div class="card-body d-flex align-items-center">
                                <div class="user-profile me-3"><img src="asset/img/profile/logo.png" alt="" style="height:100%"></div>
                                <div class="user-info">
                                    <p class="bold mb-0">Nama Rekening</p>
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-1">11111111111111</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
          <div class="card-body">
             <h5 class="ms-1">Transfer Via Bank</h5>  
             <div class="list-group">
                <a class="list-group-item list-group-item-action active" href="#">
                    <div class="user-profile me-3"><img src="asset/img/profile/logo.png" alt="" style="max-width: 8%;"> <span class="px-2"> Nama Rekening</span></div>
                </a>
                <a class="list-group-item list-group-item-action" href="#">
                    <div class="user-profile me-3"><img src="asset/img/profile/logo.png" alt="" style="max-width: 8%;"> <span class="px-2"> Nama Rekening</span></div>
                </a>
                <a class="list-group-item list-group-item-action" href="#">
                    <div class="user-profile me-3"><img src="asset/img/profile/logo.png" alt="" style="max-width: 8%;"> <span class="px-2"> Nama Rekening</span></div>
                </a>
            </div>
        </div>
    </div>

    <div class="card mt-3">
      <div class="card-body">
        <h5 class="ms-1">Transfer Via Aplikasi</h5>  
         <div class="list-group">
            <a class="list-group-item list-group-item-action active" href="#">
                <div class="user-profile me-3"><img src="asset/img/profile/logo.png" alt="" style="max-width: 8%;"> <span class="px-2"> Dana</span></div>
            </a>
            <a class="list-group-item list-group-item-action" href="#">
                <div class="user-profile me-3"><img src="asset/img/profile/logo.png" alt="" style="max-width: 8%;"> <span class="px-2"> OVO</span></div>
            </a>
            <a class="list-group-item list-group-item-action" href="#">
                <div class="user-profile me-3"><img src="asset/img/profile/logo.png" alt="" style="max-width: 8%;"> <span class="px-2"> Go Pay</span></div>
            </a>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php include 'footer.php'; ?>