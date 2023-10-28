<?php
include '../config.php';
$admin = new Admin();

$trid = $_SESSION['tid'];

$stmt = $admin->ret("SELECT * FROM `trainer` WHERE `tr_id`='$trid'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Personal Trainer</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/typicons/typicons.css">
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <style>
        .clickable-image {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php
        include 'navbar.php';
        ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <?php
            include 'sidebar.php';
            ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Update profile Details</h4>
                                    <form class="forms-sample" action="../controller/edittrainerprofile.php" method="POST" enctype="multipart/form-data">
                                        <div>
                                            <label for="profile-image" class="clickable-image">
                                                <img class="user-photo" src="../controller/<?php echo $row['tr_img'] ?>" alt="" style="width:120px;height:120px;border-radius:100px">
                                            </label>

                                        </div>
                                        <div class="form-group">
                                        <label for="exampleInputName1">Name</label><br>
                                        <input type="file" name="img" id="profile-image" onchange="previewImage(event)">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="postid" value="<?php echo $row['tr_id'] ?>">
                                            <label for="exampleInputName1">Name</label>
                                            <input type="text" name="name" value="<?php echo $row['tr_name'] ?>" class="form-control" id="exampleInputName1" placeholder="Title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Phone No</label>
                                            <textarea name="phone" class="form-control" id="exampleTextarea1" rows="4" required><?php echo $row['tr_phone'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Occupations</label>
                                            <textarea name="occ" class="form-control" id="exampleTextarea1" rows="4" required><?php echo $row['tr_occ'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Knowledge</label>
                                            <textarea name="know" class="form-control" id="exampleTextarea1" rows="4" required><?php echo $row['tr_know'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Address</label>
                                            <textarea name="address" class="form-control" id="exampleTextarea1" rows="4" required><?php echo $row['tr_address'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">About</label>
                                            <textarea name="about" class="form-control" id="exampleTextarea1" rows="4" required><?php echo $row['tr_about'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Weight</label>
                                            <textarea name="weight" class="form-control" id="exampleTextarea1" rows="4" required><?php echo $row['tr_weight'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Height</label>
                                            <textarea name="height" class="form-control" id="exampleTextarea1" rows="4" required><?php echo $row['tr_height'] ?></textarea>
                                         </div>
                                        <button type="submit" name="editprofile" class="btn btn-primary me-2">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright ©
                            2021. All rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.querySelector('.user-photo');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="vendors/select2/select2.min.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/file-upload.js"></script>
    <script src="js/typeahead.js"></script>
    <script src="js/select2.js"></script>
    <!-- End custom js for this page-->
    
</body>

</html>
