<?php
include 'config.php';
$admin = new Admin();

$gymid = $_GET['gymid'];


$stmt = $admin->ret("SELECT * FROM `gym` WHERE `gym_id`='$gymid'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);


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




</head>

<body>




    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Offcanvas Menu Section Begin -->


    <!-- Header Section Begin -->
    <?php

    include 'navbar.php';
    ?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/dumbels.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>About Gym</h2>
                        <div class="bt-option">
                            <a href="index.php">Home</a>
                            <span>About Gym</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Breadcrumb Section End -->



    <!-- Testimonial Section Begin -->





    <section class="class-details-section spad ">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 ">
                    <div class="class-details-text">

                        <div class="cd-text">

                            <div class="cd-single-item">
                                <h3 style="color:#9BCDD2">Fitness Center</h3>
                                <p> </p>
                            </div>
                        </div>
                        <div class="cd-trainer">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="cd-trainer-pic ">
                                        <img style="width:400px; height: 500px;object-fit:cover" src="gym/controller/<?php echo $row['gym_img'] ?>" alt="">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cd-trainer-text">
                                        <div class="trainer-title">
                                            <h4><?php echo $row['gym_name'] ?></h4>

                                        </div>
                                        <!-- <div class="trainer-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa  fa-envelope-o"></i></a>
                                        </div> -->
                                        <p> </p>
                                        <ul class="trainer-info">

                                            <li><span>Contact</span><?php echo $row['gym_phone']; ?></li>
                                            <li><span>Email</span><?php echo $row['gym_email'] ?></li>

                                        </ul>
                                        <p><?php echo $row['gym_about'] ?></p>
                                    </div>
                                </div>


                                <!-- <div style="background: #4F4F4F;padding:30px; padding-right:20px;width:500px;margin-left:300px;border-radius:10px;margin-bottom:20px"> -->
                                <div style="background: #131313;padding:30px; margin-top:40px; padding-right:20px; margin-left:350px;  border-radius:10px; margin-bottom:20px">
                                    <?php
                                    if (!isset($_SESSION['uid'])) { ?>
                                        <a href="userlogin.php" class="btn btn-danger">View Post</a>
                                        <a href="userlogin.php" class="btn btn-info">View Membership</a>
                                        <a href="userlogin.php" class="btn btn-info">View Certificate</a>
                                    <?php } else { ?>
                                        <a href="viewgympost.php?gymid=<?php echo $gymid ?>" class="btn btn-danger">View Post</a>
                                        <a href="viewmembership.php?gymid=<?php echo $gymid ?>" class="btn btn-info">View Membership</a>
                                        <a href="viewcertificate.php?gymid=<?php echo $gymid ?>" class="btn btn-info">View Certificate</a>
                                    <?php } ?>
                                </div>




                            </div>
                        </div>



                        <div class="gallery-section gallery-page">

                            <div class="gallery">
                                <?php
                                $stmt3 = $admin->ret("SELECT * FROM `gymimage` WHERE `gym_id`='$gymid'");
                                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <div class="grid-sizer"> </div>

                                    <div class="gs-item grid-wide set-bg" data-setbg="gym/controller/<?php echo $row3['gym_img'] ?>" ;>
                                        <a href="gym/controller/<?php echo $row3['gym_img'] ?>" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
                                    </div>

                                <?php }
                                ?>

                            </div>

                        </div>






                    </div>
                </div>




            </div>
        </div>
    </section>

    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>Our Team</span>
                            <h2>TRAIN WITH EXPERTS</h2>
                        </div>
                        <a href="#" class="primary-btn btn-normal appoinment-btn">appointment</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ts-slider owl-carousel">
                    <?php
                    $stmt4 = $admin->ret("SELECT * FROM `request` INNER JOIN `trainer` ON trainer.tr_id=request.tr_id WHERE `gym_id`='$gymid' AND `req_status`='accepted'");
                    while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) { ?>
                        <div class="col-lg-4">
                            <div class="ts-item set-bg" data-setbg="trainer/controller/<?php echo $row4['tr_img'] ?>">
                                <div class="ts_text">
                                    <h4><?php echo $row4['tr_name'] ?></h4>
                                    <span>Gym Trainer</span>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>


                </div>
            </div>
        </div>
    </section>



    <!-- Testimonial Section End -->

    <!-- Get In Touch Section Begin -->

    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <?php

    include 'footer.php';
    ?>
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
    <script>
        $(document).ready(function() {
            // Initialize carousel
            $('#myCarousel').carousel();

            // Set the interval for automatic sliding (in milliseconds)
            $('.carousel').carousel({
                interval: 2000 // Change this value to adjust the slide duration
            });
        });
    </script>
    <!-- Js Plugins -->
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