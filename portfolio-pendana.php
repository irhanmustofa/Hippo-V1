<?php
include 'header.php';

require_once "utility.php";
$email = $_SESSION['email'];
$link = "getProfile&email=" . urlencode($email);

$link = "getBisnis";
$data = getRegistran($link);
?>



<div class="page-content-wrapper py-3">
    <!-- Pagination-->
    <div class="shop-pagination pb-3">
        <div class="container">
            <div class="card">
                <div class="card-body p-2">
                    <div class="d-flex align-items-center justify-content-between"><small class="ms-1">Portfolio</small>    
                        <div class="container d-flex justify-content-end">
                            <div class="card direction-rtl">
                                <div class="card-body">
                                    <!-- Fullscreen Modal Trigger Button -->
                                    <a href="all-bisnis.php" class="btn btn-primary">Mulai Investasi</a>
                                </div>
                            </div>
                        </div>
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
                    if ($data == NULL) { ?>
                        <div class="card text-center">
                            <div class="card-header">
                                Data Kosong
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer text-muted">
                                2 days ago
                            </div>
                        </div>
                    <?php } else{

                        $link = "getPendanaanUser&email_pendana=" . urlencode($email);
                        // echo $link;
                        $output = getRegistran($link);
                        foreach ($output->data as $array_item) { ?>

                            <div class="card mb-3">
                              <div class="row g-0">
                                <div class="col-md-4">
                                  <img src="image/<?php echo $array_item->gambar ?>" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                  <div class="card-body">
                                    <h5 class="card-title"><?php echo $array_item->nama_bisnis ?></h5>
                                    <p class="card-text"><?php echo $array_item->deskripsi ?></p>
                                    <p class="card-text"><small class="text-muted">Jumlah Invest : <?php echo $array_item->jumlah_invest; ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php } ?>
            <?php } ?> 


</div>
</div>
</div>
<!-- Top Products-->
    <!-- <div class="top-products-area product-list-wrap">
        <div class="container">
            <div class="row g-3">
                <div class="col-12">
                    

                </div>
            </div>
        </div>
    </div> -->
    <!-- Pagination-->
    <!-- <div class="shop-pagination pt-3">
        <div class="container">
            <div class="card">
                <div class="card-body py-3">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-two justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <svg class="bi bi-chevron-left" width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">9</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div> -->
</div>
<?php include 'footer.php'; ?>