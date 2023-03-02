<?php
include 'header.php';

require_once "utility.php";
$email = $_SESSION['email'];
$link = "getProfile&email=" . urlencode($email);
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