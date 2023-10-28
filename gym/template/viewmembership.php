<?php
include '../config.php';
$admin = new Admin();

$gid = $_SESSION['gid'];

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



                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">View Membership Details</h4>

                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Slno
                                                    </th>
                                                    <th>
                                                        Membership Title
                                                    </th>
                                                    <th>
                                                        Membership Duration
                                                    </th>
                                                    <th>
                                                        Membership Description
                                                    </th>
                                                    <th>
                                                        Membership Amount
                                                    </th>
                                                    <th>
                                                        Date
                                                    </th>
                                                    <th>
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>

                                            <?php
                                            $count = 1;
                                            $stmt = $admin->ret("SELECT * FROM `membership` WHERE `gym_id`='$gid'");
                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

                                                <tr>
                                                    <td class="py-1">
                                                        <?php echo $count++; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['mem_title'] ?>

                                                    </td>
                                                    <td>
                                                        <?php echo $row['mem_duration'] ?>

                                                    </td>
                                                    <td>
                                                        <textarea class="form-control" readonly> <?php echo $row['mem_descp'] ?></textarea>
                                                    </td>
                                                    <td>
                                                        ₹<?php echo $row['mem_price'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['mem_date'] ?>
                                                    </td>
                                                    <td>
                                                        <a href="updatemembership.php?mid=<?php echo $row['mem_id'] ?>"><i class="menu-icon mdi mdi-pencil-box" style="font-size:27px;color:blue"></i></a>
                                                        <a href="../controller/deletemembership.php?mid=<?php echo $row['mem_id'] ?>"><i class="menu-icon mdi mdi-delete" style="font-size:27px;color:red"></i></a>
                                                    </td>
                                                </tr>

                                            <?php
                                            }

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