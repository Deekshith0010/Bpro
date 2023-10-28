<?php
include '../config.php';
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
                                    <h4 class="card-title">Add Membership Details</h4>

                                    <form action="../controller/addmembership.php" method="POST" class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Membership Title</label>
                                            <input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="Title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Membership duration</label>
                                            <input type="text" name="duration" class="form-control" id="exampleInputName1" placeholder="Duration" required>
                                        </div>
                                        <div class="form-group">
                                            <div id="req_input" class="datainputs">
                                            <label for="exampleInputName1">Fecilities</label>
                                                <input name="facilities[]" class="form-control" placeholder="Facilities" type="text" required>

                                            </div>

                                            <a id="addmore" style="margin-top: 10px;" class="btn btn-success mr-2 add_input">Add more</a>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Membership Amount</label>
                                            <input type="number" name="amt" class="form-control" id="exampleInputName1" placeholder="Amount" required>
                                        </div>





                                        <button type="submit" name="addmem" class="btn btn-primary me-2">Add</button>
                                        <button type="reset" class="btn btn-light">Clear</button>
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


    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
  <script>
    $(document).ready(function() {
      $("#addmore").click(function() {
        $("#req_input").append('<div class="required_inp" style="display:flex;margin-top:5px"><input name="facilities[]" class="form-control" placeholder="Facilities" type="text" >' + '<button style="border:none; background-color: transparent;" class="inputRemove"><i style="font-size:25px;color:red" class="mdi mdi-delete menu-icon"></i></button> </div>');
      });
      $('body').on('click', '.inputRemove', function() {
        $(this).parent('div.required_inp').remove()
      });
    });
  </script>
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