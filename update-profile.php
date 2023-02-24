<?php 
include "header.php";

?>

<div class="page-content-wrapper py-3" style="background-color:#fdf3f2;">
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
            <h5 class="mb-1">Affan Islam</h5><span class="badge bg-warning ms-2 rounded-pill">Pro</span>
          </div>
          <p class="mb-0">UX/UI Designer</p>
        </div>
      </div>
    </div>
    <!-- User Meta Data-->
    <div class="card user-data-card">
      <div class="card-body">
        <form action="#" enctype="multipart/form-data">
          <div class="form-group mb-3">
            <label class="form-label" for="">Pekerjaan</label>
            <input class="form-control" id="pekerjaan" type="text" name="pekerjaan">
          </div>
          <div class="form-group mb-3">
            <label class="form-label" for="">No Identitas</label>
            <input class="form-control" id="no_identitas" type="text" name="no_identitas">
          </div>
          <div class="form-group mb-3">
            <label class="form-label" for="">No NPWP</label>
            <input class="form-control" id="no_npwp" type="text" name="no_npwp">
          </div>
          <div class="form-group mb-3">
            <label class="form-label" for="alamat">Alamat</label>
            <input class="form-control" id="alamat" type="text" name="alamat">
          </div>
          <div class="form-group mb-3">
							<label class="form-label">Upload Foto KTP</label>
							<div class="container">
                <div class="card">
                  <div class="card-body">
                    <div class="file-upload-card">
                      <svg class="bi bi-file-earmark-arrow-up text-primary" width="48" height="48" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"></path>
                        <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"></path>
                        <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V7.707l1.146 1.147a.5.5 0 0 0 .708-.708l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 7.707V11.5a.5.5 0 0 0 .5.5z"></path>
                      </svg>
                      <h5 class="mt-2 mb-4">Upload your files</h5>
                      <form action="#" method="GET">
                        <div class="form-file">
                          <input class="form-control d-none" id="customFile" type="file">
                          <label class="form-file-label justify-content-center" for="customFile"><span class="form-file-button btn shadow w-100 text-white" style="background-color:#f7645a">Upload File</span></label>
                        </div>
                      </form>
                      <h6 class="mt-4 mb-0">Supported files</h6><small>.jpg .png .jpeg .gif</small>
                    </div>
                  </div>
                </div>
              </div>
						</div>
          
          <button class="btn text-white w-100" type="submit" style="background-color:#FF735C">Update Now</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Footer Nav -->
<div class="footer-nav-area" id="footerNav">
  <div class="container px-0">
    <!-- =================================== -->
    <!-- Paste your Footer Content from here -->
    <!-- =================================== -->

    <?php 
include "footer.php";

?>