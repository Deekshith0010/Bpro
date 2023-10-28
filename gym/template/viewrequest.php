<?php
include '../config.php';
$admin = new Admin();

$gymid = $_SESSION['gid'];

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

            <!-- partial:partials/_sidebar.html -->
            <?php
            include 'sidebar.php';
            ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">



                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">View Trainer Requests</h4>

                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Slno
                                                    </th>
                                                    <th>
                                                        Trainer Name
                                                    </th>
                                                    <th>
                                                        Email Address
                                                    </th>
                                                    <th>
                                                        Phone Number
                                                    </th>
                                                    <th>
                                                        View
                                                    </th>
                                                    <th>
                                                        Status
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count = 1;
                                                $stmt = $admin->ret("SELECT * FROM `request` INNER JOIN `trainer` ON trainer.tr_id=request.tr_id WHERE `gym_id`='$gymid'");
                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $count++ ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['tr_name'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['tr_email'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['tr_phone'] ?>
                                                        </td>
                                                        <td>
                                                            <a href="../../viewtrainer1.php?trid=<?php echo $row['tr_id'] ?>" target="_blank"><i class="mdi mdi-eye" style="font-size: 27px;"></i></a>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if ($row['req_status'] == 'pending') { ?>
                                                            <a href="../controller/accepttrainer.php?rid=<?php echo $row['req_id'] ?>" class="btn btn-success">Accept</a>
                                                            <a href="../controller/rejecttrainer.php?rid=<?php echo $row['req_id'] ?>" class="btn btn-danger">Reject</a>
                                                           <?php } else if ($row['req_status'] == 'accepted') { ?>
                                                            <button class="btn btn-success" style="width:180px">Accepted</button>
                                                            <?php } else if ($row['req_status'] == 'rejected') { ?>
                                                            <button class="btn btn-danger" style="width:180px">Rejected</button>
                                                            <?php } 

                                                            ?>
                                                        </td>
                                                    </tr>
                                                <?php }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <?php
                    include 'footer.php';
                    ?>
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
        <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/dashboard.js"></script>
        <script src="js/hoverable-collapse.js"></script>
        <script src="js/template.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <!-- End custom js for this page-->
</body>

</html>