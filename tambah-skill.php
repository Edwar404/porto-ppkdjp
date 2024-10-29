<?php
session_start();
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama_skill = $_POST['nama_skill'];

    $insert = mysqli_query($koneksi, "INSERT INTO skills (nama_skill) VALUES ('$nama_skill')");

    header("location:skills.php?tambah=berhasil");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link
        rel="stylesheet"
        href="template/assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link
        rel="stylesheet"
        href="template/assets/vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link
        rel="stylesheet"
        href="template/assets/vendors/jvectormap/jquery-jvectormap.css" />
    <link
        rel="stylesheet"
        href="template/assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link
        rel="stylesheet"
        href="template/assets/vendors/owl-carousel-2/owl.carousel.min.css" />
    <link
        rel="stylesheet"
        href="template/assets/vendors/owl-carousel-2/owl.theme.default.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="template/assets/css/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="template/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?php include 'inc/sidebar.php' ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?php include 'inc/navbar.php' ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header"><?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?> Skill</div>
                                <div class="card-body">
                                    <?php if (isset($_GET['hapus'])): ?>
                                        <div class="alert alert-success" role="alert">
                                            Data berhasil dihapus
                                        </div>
                                    <?php endif ?>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="mb-3 row">
                                            <div class="col-sm-6">
                                                <label for="" class="form-label">Nama Skill</label>
                                                <input type="text"
                                                    class="form-control"
                                                    name="nama_skill"
                                                    placeholder="Masukkan Kemampuan Anda"
                                                    required>
                                            </div>
                                            <!-- <div class="col-sm-6">
                                                <label for="" class="form-label">Email</label>
                                                <input type="email"
                                                    class="form-control"
                                                    name="email"
                                                    placeholder="Masukkan email anda"
                                                    required
                                                    value="<?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?>">
                                            </div> -->
                                        </div>
                                        <!-- <div class="mb-3 row">
                                            <div class="col-sm-12">
                                                <label for="" class="form-label">Password</label>
                                                <input type="password"
                                                    name="password"
                                                    placeholder="Masukkan password anda"
                                                    class="form-control"
                                                    id="">
                                            </div>
                                        </div> -->
                                        <!-- <div class="mb-3 row">
                                            <div class="col-sm-12">
                                                <label for="" class="form-label">Foto</label>
                                                <input type="file"
                                                    name="foto" required>
                                                <img src="upload/<?php echo $rowEdit['foto'] ?>" width="100" alt="">
                                            </div>
                                        </div> -->
                                        <div class="mb-3">
                                            <button class="btn btn-primary" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>" type="submit">
                                                Simpan
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <?php include 'inc/footer.php' ?>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="template/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="template/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="template/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="template/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="template/assets/js/off-canvas.js"></script>
    <script src="template/assets/js/hoverable-collapse.js"></script>
    <script src="template/assets/js/misc.js"></script>
    <script src="template/assets/js/settings.js"></script>
    <script src="template/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="template/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>