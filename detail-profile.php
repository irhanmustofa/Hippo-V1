<?php
  include 'header.php';
  require_once 'utility.php';
  $error = "";

  $email = $_SESSION['email'];
  $link = "getProfile&email=".urlencode($email);

  $data = getRegistran($link); 
?>
<div class="page-content-wrapper py-3">
  <div class="container">
    <!-- User Meta Data-->
    <div class="card user-data-card">
      <div class="card-body">
        <form action="#">
          <div class="form-group mb-3">
            <label class="form-label" for="fullname">Full Name</label>
            <input class="form-control" id="fullname" type="text" value="<?php echo ($data->data[0]->nama) ?>" placeholder="Full Name">
          </div>
          <div class="form-group mb-3">
            <label class="form-label" for="email">Email Address</label>
            <input class="form-control" id="email" type="email" value="<?php echo ($data->data[0]->email) ?>" placeholder="Email Address" readonly>
          </div>
          <label class="form-label" for="job">Password</label>
          <div class="input-group mb-3">
            <input class="form-control" type="password" aria-label="Text input with dropdown button" value="<?php echo ($data->data[0]->password) ?>" placeholder="" readonly>
            <a href="../preload/forget-password.php" class="btn btn-primary" type="a">Ubah</a>
          </div>
          <div class="form-group mb-3">
            <label class="form-label" for="portfolio">No Identitas</label>
            <input class="form-control" id="portfolio" type="url" value="<?php echo ($data->data[0]->no_identitas) ?>" placeholder="Portfolio URL">
          </div>
          <div class="form-group mb-3">
            <label class="form-label" for="address">No N</label>
            <input class="form-control" id="address" type="text" value="28/C Green Road, BD" placeholder="Address">
          </div>
          <div class="form-group mb-3">
            <label class="form-label" for="bio">Bio</label>
            <textarea class="form-control" id="bio" name="bio" cols="30" rows="10" placeholder="Working as UX/UI Designer at Designing World since 2016."></textarea>
          </div>
          <button class="btn btn-success w-100" type="submit">Update Now</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>