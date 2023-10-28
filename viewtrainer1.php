<?php
include 'config.php';
$admin=new Admin();

$trid=$_GET['trid'];


$stmt=$admin->ret("SELECT * FROM `trainer` WHERE `tr_id`='$trid'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);


//to get the age

$dob = $row['dob'];
$age = date_diff(date_create($dob), date_create('today'))->y;

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
    <div id="preloder">
        <div class="loader"></div>
    </div>

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
                        <h2>About Trainer</h2>
                        <div class="bt-option">
                            <a href="index.php">Home</a>
                            <span>About Trainer</span>
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
                                <h3 >Trainer</h3>
                                <p>  </p>
                            </div>
                        </div>
                        <div class="cd-trainer">
                            <div class="row">
                                <div class="col-md-6" >
                                    <div class="cd-trainer-pic ">
                                        <img style="width:400px; height: 500px;object-fit:cover"  src="trainer/controller/<?php echo $row['tr_img'] ?>" alt="">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cd-trainer-text">
                                        <div class="trainer-title">
                                            <h4><?php echo $row['tr_name'] ?></h4>
                                            <span>Gym Trainer</span>
                                        </div>
                                       
                                        <p>      </p>
                                        <ul class="trainer-info">
                                        
                                            <li><span>age</span><?php echo $age;?></li>
                                            <li><span>Weight</span><?php echo $row['tr_weight']?>kg</li>
                                            <li><span>Height</span><?php echo $row['tr_height'] ?></li>
                                            <li><span>Occupation</span><?php echo $row['tr_occ'] ?></li>
                                            <li><span>Experience in</span><?php echo $row['tr_know'] ?></li>
                                            <li><span>Year of Experience</span><?php echo $row['tr_exp'] ?></li>
                                            <li><span>Address</span><?php echo $row['tr_address'] ?></li>
                                            <li><span>Contact</span><?php echo $row['tr_phone'] ?></li>
                                        </ul>
                                         <p>" <?php echo $row['tr_about'] ?> "</p>
                                    </div>
                                </div>


                                <!-- <div style="background: #4F4F4F;padding:30px; padding-right:20px;width:500px;margin-left:300px;border-radius:10px;margin-bottom:20px"> -->
                                <div style="background: #131313;padding:30px; margin-top:40px; padding-right:20px; margin-left:300px;  border-radius:10px; margin-bottom:20px">
                                <?php
                            if (!isset($_SESSION['uid'])) { ?>
                                    <a href="userlogin.php" class="btn btn-danger">View Post</a>
                                    <a href="userlogin.php" class="btn btn-info">View Schedule</a>
                                    <a href="userlogin.php" class="btn btn-warning">View Gym</a>
                                    <?php } else { ?>
                                        <a href="viewtrainerpost.php?trid=<?php echo $trid ?>" class="btn btn-danger">View Post</a>
                                    <a href="viewschedule.php?trid=<?php echo $trid ?>" class="btn btn-info">View Schedule</a>
                                    <a href="viewtrgym.php?trid=<?php echo $trid ?>" class="btn btn-warning">View Gym</a>
                                  <?php  } ?>
                                </div>



                             
                            </div>
                        </div>



                        <div class="gallery-section gallery-page">
        <div class="gallery" >
            <div class="grid-sizer"></div>
            <div class="gs-item grid-wide set-bg" data-setbg="trainer/controller/<?php echo $row['tr_cert'] ?>">
                <a href="trainer/controller/<?php echo $row['tr_cert'] ?>" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
                    </div>
                </div>
                


                
            
           
        </div>
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