<?php
include 'header.php';

require_once "utility.php";
$email = $_SESSION['email'];
$link = "getProfile&email=" . urlencode($email);

$link = "getBisnisAcc";
$output = getRegistran($link);

?>
<div class="page-content-wrapper py-3">
  <!-- Pagination -->
  <div class="shop-pagination pb-3">
    <div class="container">
      <div class="card">
        <div class="card-body p-2">
          <div class="d-flex align-items-center justify-content-between"><small class="ms-1">Showing 6 of 31</small>
            <form action="#">
              <select class="pe-4 form-select form-select-sm" id="defaultSelectSm" name="defaultSelectSm" aria-label="Default select example">
                <option value="1" selected>Sort by Newest</option>
                <option value="2">Sort by Older</option>
                <option value="3">Sort by Ratings</option>
                <option value="4">Sort by Sales</option>
              </select>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Top Products -->
  <div class="top-products-area">
    <div class="container">
      <div class="row g-3">
        <!-- Single Top Product Card -->
        <?php foreach ($output->data as $array_item): ?>


          <div class="col-6 col-sm-4 col-lg-3">
            <div class="card single-product-card">
              <div class="card-body p-3">
                <!-- Product Thumbnail --><a class="product-thumbnail d-block" href="page-shop-details.html"><img src="./image/<?php echo $array_item->gambar; ?>" alt="">
                  <!-- Product Title --><a class="product-title d-block text-truncate" href="page-shop-details.html"><?php echo $array_item->nama_bisnis; ?></a>
                  <!-- Product Price -->
                  <p class="sale-price"><?php echo $array_item->dana; ?></p><a class="btn btn-outline-info btn-sm" href="detail-bisnis.php?id=<?php echo $array_item->id_bisnis; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye me-2" viewBox="0 0 16 16">
                      <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                      <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                    </svg>Detail</a>
                  </div>
                </div>
              </div>

            <?php endforeach ?>
            <!-- Pagination -->
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
