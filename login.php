<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $queryLogin = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");

  if (mysqli_num_rows($queryLogin) > 0) {
    $rowLogin = mysqli_fetch_assoc($queryLogin);
    if ($password == $rowLogin['password']) {
      $_SESSION['nama'] = $rowLogin['nama'];
      $_SESSION['id']   = $rowLogin['id'];
      header("location:index.php");
    } else {
      header("location:login.php?login=gagal");
    }
  } else {

    header("location:login.php?login=gagal");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Corona Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="template/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="template/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="template/assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="template/assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Login</h3>
              <form method="post">
                <div class="form-group">
                  <label>Username or email *</label>
                  <input type="text" name="email" required class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Password *</label>
                  <input type="password" required name="password" class="form-control p_input">
                </div>
                <!-- <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div> -->
                <div class="text-center">
                  <button name="login" type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>
                <!-- <div class="d-flex">
                    <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p> -->
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="template/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="template/assets/js/off-canvas.js"></script>
  <script src="template/assets/js/hoverable-collapse.js"></script>
  <script src="template/assets/js/misc.js"></script>
  <script src="template/assets/js/settings.js"></script>
  <script src="template/assets/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>