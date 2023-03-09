<!-- Footer Nav -->
<div class="footer-nav-area" id="footerNav">
    <div class="container px-0">
        <!-- =================================== -->
        <!-- Paste your Footer Content from here -->
        <!-- =================================== -->
        <!-- Footer Content -->
        <div class="footer-nav position-relative">
            <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                <li class="active"><a href="index.php">
                        <svg class="bi bi-house" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                            </path>
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                            </path>
                        </svg>
                        <span>Home</span>
                    </a>
                </li>
                <?php if ($_SESSION['user'] == 1){ ?>
                    <li>
                        <a href="portfolio-penerbit.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pie-chart" viewBox="0 0 16 16">
                                <path d="M7.5 1.018a7 7 0 0 0-4.79 11.566L7.5 7.793V1.018zm1 0V7.5h6.482A7.001 7.001 0 0 0 8.5 1.018zM14.982 8.5H8.207l-4.79 4.79A7 7 0 0 0 14.982 8.5zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                            </svg>
                            <span>Portfolio</span>
                        </a>
                    </li>

                <?php } else {?>
                <li>
                    <a href="portfolio-pendana.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pie-chart" viewBox="0 0 16 16">
                            <path d="M7.5 1.018a7 7 0 0 0-4.79 11.566L7.5 7.793V1.018zm1 0V7.5h6.482A7.001 7.001 0 0 0 8.5 1.018zM14.982 8.5H8.207l-4.79 4.79A7 7 0 0 0 14.982 8.5zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                        </svg>
                        <span>Portfolio</span>
                    </a>
                </li>
                <?php } ?>

                <li><a href="saldo.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
                            <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z" />
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                        </svg>
                        <span>Saldo</span>
                    </a>
                </li>
                <li><a href="transaksi.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                        </svg>
                        <span>Transaksi</span>
                    </a>
                </li>
                
                <li><a href="profile.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        <span>Profile</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- All JavaScript Files -->
<script src="asset/js/bootstrap.bundle.min.js"></script>
<script src="asset/js/slideToggle.min.js"></script>
<script src="asset/js/internet-status.js"></script>
<script src="asset/js/tiny-slider.js"></script>
<script src="asset/js/baguetteBox.min.js"></script>
<script src="asset/js/countdown.js"></script>
<script src="asset/js/rangeslider.min.js"></script>
<script src="asset/js/vanilla-dataTables.min.js"></script>
<script src="asset/js/index.js"></script>
<script src="asset/js/magic-grid.min.js"></script>
<script src="asset/js/dark-rtl.js"></script>
<script src="asset/js/active.js"></script>
<!-- PWA -->
<script src="asset/js/pwa.js"></script>

<!-- script ck editor -->
<script src="https://cdn.ckeditor.com/4.20.1/basic/ckeditor.js"></script>
<script>
    CKEDITOR.replace('deskripsi');
</script>
</body>

</html>