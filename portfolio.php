<?php include 'header.php'; ?>

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
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#fullscreenModal">Ajukan Pendanaan</button>
                                </div>
                            </div>
                        </div>
                        <!-- Fullscreen Modal -->
                        <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-labelledby="fullscreenModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="fullscreenModalLabel">Halaman Ajukan Pendanaan</h6>
                                        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post">
                                            <label for="">Nama Pengajuan</label>
                                            <input class="form-control" type="text">
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-sm btn-success" type="button">Save</button>
                                    </div>
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
                <!-- Single Top Product Card-->
                <div class="col-12">
                    <div class="card single-product-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="card-side-img">
                                    <!-- Product Thumbnail--><a class="product-thumbnail d-block" href="page-shop-details.html"><img src="asset/img/profile/logo.jpg" alt="">
                                        <!-- Badge--><span class="badge bg-primary">Sale</span></a>
                                </div>
                                <div class="card-content px-4 py-2">
                                    <!-- Product Title-->
                                    <a class="product-title d-block text-truncate mt-0" href="page-shop-details.html">Wooden Tool</a>
                                    <!-- Product Price-->
                                    <p class="sale-price">$9.89<span>$13.42</span></p>
                                    <!-- Add To Cart Button-->
                                    <a class="btn btn-outline-danger btn-sm disabled" href="#">
                                        <svg class="bi bi-cart-x me-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M7.354 5.646a.5.5 0 1 0-.708.708L7.793 7.5 6.646 8.646a.5.5 0 1 0 .708.708L8.5 8.207l1.146 1.147a.5.5 0 0 0 .708-.708L9.207 7.5l1.147-1.146a.5.5 0 0 0-.708-.708L8.5 6.793 7.354 5.646z"></path>
                                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                        </svg>Out of Stock
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pagination-->
    <div class="shop-pagination pt-3">
        <div class="container">
            <div class="card">
                <div class="card-body py-3">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-two justify-content-center">
                            <li class="page-item"><a class="page-link" href="#" aria-label="Previous">
                                    <svg class="bi bi-chevron-left" width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                                    </svg></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">9</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next">
                                    <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>