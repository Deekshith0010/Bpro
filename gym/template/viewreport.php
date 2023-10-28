<?php
include '../config.php';
$admin=new Admin();

$gymid=$_SESSION['gid'];
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
                        <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Membership Report</h4>

                                <br>
                                <br>

                                <form class="forms-sample" method="POST" action="viewreport.php">

                                    <div class="form-group">
                                        <label for="exampleInputName1">Select starting date</label>
                                        <input type="date" name="start_date" class="form-control" id="exampleInputName1" max="<?php echo date('Y-m-d') ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName1">Select ending date</label>
                                        <input type="date" name="end_date" class="form-control" id="exampleInputName1" max="<?php echo date('Y-m-d') ?>" required>
                                    </div>


                                    <button type="submit" name="view_report" class="btn btn-primary mr-2">view report</button>
                                    <a href="viewreport.php" class="btn btn-light">Clear</a>
                                </form>
                            </div>
                        </div>
                    </div>


                    <?php
                    //showing order table
                    if (isset($_POST['view_report'])) {

                        $start_date = $_POST['start_date'];

                        $end_date = $_POST['end_date'];
                    ?>

          <div class="row">
            
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Membership Report</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Slno
                          </th>
                          <th>
                            User Name
                          </th>
                          <th>
                            Duration
                          </th>
                          <th>
                            Amount
                          </th>
                          <th>
                            Date
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php
                      $count=1;
                      $stmt=$admin->ret("SELECT *FROM `mem_payment` INNER JOIN `user` ON user.user_id=mem_payment.user_id INNER JOIN `membership` ON membership.mem_id=mem_payment.mem_id WHERE mem_payment.mpay_date BETWEEN '$start_date' AND '$end_date' AND mem_payment.gym_id='$gymid'");
                      while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                      ?>
                        <tr>
                        
                          <td>
                            <?php echo $count++ ?>
                          </td>
                          <td>
                            <?php echo $row['user_name'] ?>
                          </td>
                          <td>
                            <?php echo $row['mem_duration'] ?>
                          </td>
                          <td>
                            ₹<?php echo $row['mem_price'] ?>
                          </td>
                          <td>
                            <?php echo $row['mpay_date'] ?>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          
           
          
          </div>
          <?php } ?>
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