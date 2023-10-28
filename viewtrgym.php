<?php
include 'config.php';
$admin = new Admin();

$trid = $_GET['trid'];
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gym | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <style>
        #external.hover{
            color:blue;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
   

 

    <!-- Header Section Begin -->
    <?php include 'navbar.php';
    ?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/dumbels.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>View Gyms</h2>
                        <div class="bt-option">
                            <a href="index.php">Home</a>
                            <a href="">View Gym</a>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    <!-- Class Timetable Section Begin -->
    <section class="class-timetable-section class-details-timetable spad">
        <div class="container" style="padding-top: 30px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="class-details-timetable_title">
                        <h5>I am available in these gyms.</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="class-timetable details-timetable">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Slno</th>
                                    <th>Gym Name</th>
                                    <th>Address</th>
                                    <th>View</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                $stmt = $admin->ret("SELECT * FROM `request` INNER JOIN `gym` ON gym.gym_id=request.gym_id WHERE tr_id='$trid' AND `req_status`='accepted'");
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <tr>
                                        <td class="text-light"><?php echo $count++ ?></td>
                                        <td class="text-light"><?php echo $row['gym_name'] ?></td>
                                        <td class="text-light"><?php echo $row['gym_address'] ?></td>
                                        <td><a href="viewgym.php?gymid=<?php echo $row['gym_id'] ?>" id="external" target="_blank" ><i class="fa fa-external-link" style="font-size:27px;"></i></a></td>
                                       

                                    </tr>
                                <?php }
                                ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Class Timetable Section End -->

    <!-- Get In Touch Section Begin -->

    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <?php include 'footer.php'; ?>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>