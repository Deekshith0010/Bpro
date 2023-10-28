<?php
include '../config.php';
$admin = new Admin();

$mid = $_GET['mid'];

$stmt = $admin->ret("SELECT * FROM `membership` WHERE `mem_id`='$mid'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fitness Center </title>
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
                                    <h4 class="card-title">Update Membership Details</h4>

                                    <form action="../controller/updatemembership.php" method="POST" class="forms-sample">
                                        <div class="form-group">
                                            <input type="hidden" name="memid" value="<?php echo $row['mem_id'] ?>">
                                            <label for="exampleInputName1">Membership Title</label>
                                            <input type="text" name="title" value="<?php echo $row['mem_title'] ?>" class="form-control" id="exampleInputName1" placeholder="Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Membership duration</label>
                                            <input type="text" name="duration" value="<?php echo $row['mem_duration'] ?>" class="form-control" id="exampleInputName1" placeholder="Duration">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Membership Description</label>
                                            <textarea name="descp" class="form-control" placeholder="Description" id="exampleTextarea1" rows="4"><?php echo $row['mem_descp'] ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Membership Amount</label>
                                            <input type="number" name="amt" value="<?php echo $row['mem_price'] ?>" class="form-control" id="exampleInputName1" placeholder="Amount">
                                        </div>





                                        <button type="submit" name="updatemem" class="btn btn-primary me-2">Update</button>

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
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All
                            rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
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