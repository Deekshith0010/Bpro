<?php
include '../config.php';
$admin = new Admin();

$tid = $_SESSION['tid'];
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
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="js/select.dataTables.min.css">
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
                        <div class="col-sm-7">
                            <h4><b> Latest Requests</b></h4>
                            <div>
                                <table class="table">
                                    <tr>
                                        <th>
                                            Slno
                                        </th>
                                        <th>
                                            User Name
                                        </th>
                                        <th>
                                            Phone Number
                                        </th>
                                        <th>
                                            Email Address
                                        </th>
                                        <th>
                                            Session
                                        </th>
                                        <th>
                                            Date
                                        </th>
                                    </tr>
                                    <tbody>
                                        <?php
                                        $count = 1;
                                        $stmt = $admin->ret("SELECT *FROM `session_book` INNER JOIN `user` ON user.user_id=session_book.user_id INNER JOIN `session_gym` ON session_gym.sg_id=session_book.sg_id INNER JOIN `session` ON session.session_id=session_gym.session_id WHERE session_book.tr_id='$tid' ORDER BY `urequest_id` DESC LIMIT 5");
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $count++ ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['user_name'] ?>
                                                </td>
                                               
                                                <td>
                                                    <?php echo $row['user_phone'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['user_email'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['sessions'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['urequest_date'] ?>
                                                </td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a href="viewuserrequest.php" class="btn btn-primary col-sm-8">View All</a>
                    </div>
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
        <script src="vendors/chart.js/Chart.min.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="vendors/progressbar.js/progressbar.min.js"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/hoverable-collapse.js"></script>
        <script src="js/template.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="js/dashboard.js"></script>
        <script src="js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->
</body>

</html>