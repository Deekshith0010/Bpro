<?php
include '../config.php';
$admin = new Admin();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>B-pro</title>
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
                                    <h4 class="card-title">Fitness center</h4>

                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Slno
                                                    </th>
                                                    <th>
                                                        Gym name
                                                    </th>
                                                    <th>
                                                        Phone Number
                                                    </th>
                                                    <th>
                                                        Email Address
                                                    </th>
                                                    <th>
                                                        Address
                                                    </th>
                                                    <th>
                                                        Description
                                                    </th>
                                                    <th>
                                                        Request Status
                                                    </th>
                                                    <th>
                                                        Date
                                                    </th>
                                                    <th>
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count = 1;
                                                $stmt = $admin->ret("SELECT * FROM `gym`");
                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $count++ ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['gym_name'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['gym_phone'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['gym_email'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['gym_address'] ?>
                                                        </td>
                                                        <td>
                                                            <textarea name="" id="" cols="30" rows="5" readonly>  <?php echo $row['gym_about'] ?></textarea>
                                                        </td>
                                                        <th>
                                                            <?php
                                                            if ($row['gym_status'] == 'pending') { ?>
                                                                <a href="../controller/acceptgym.php?gymid=<?php echo $row['gym_id'] ?>" class="btn btn-success">Accept</a>
                                                                <a href="../controller/rejectgym.php?gymid=<?php echo $row['gym_id'] ?>" class="btn btn-danger">Reject</a>
                                                            <?php } else if ($row['gym_status'] == 'accepted') { ?>
                                                                <a class="btn btn-success">Accepted</a>
                                                            <?php } else if ($row['gym_status'] == 'rejected') { ?>
                                                                <a class="btn btn-danger">Rejected</a>
                                                            <?php }
                                                            ?>
                                                        </th>
                                                        <td>
                                                            <?php echo $row['gym_date'] ?>
                                                        </td>
                                                        <td>
                                                           <a href="../controller/deletegym.php?gymid=<?php echo $row['gym_id'] ?>"> <i class="mdi mdi-delete" style="font-size: 28px;color:red"></i></a>
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
        <script src="js/hoverable-collapse.js"></script>
        <script src="js/template.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/todolist.js"></script>
        <script src="js/dashboard.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <!-- End custom js for this page-->
</body>

</html>