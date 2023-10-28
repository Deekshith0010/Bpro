<?php
include 'config.php';
$admin = new Admin();

$gymid = $_GET['gymid'];
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




    <!-- Header Section Begin -->
    <?php include 'navbar.php';
    ?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>View Membership</h2>
                        <div class="bt-option">
                            <a href="index.php">Home</a>
                            <a href="">View Membership</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Plan</span>
                        <h2>Choose your pricing plan</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <?php
                $stmt = $admin->ret("SELECT * FROM `membership` WHERE `gym_id`='$gymid'");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div class="col-lg-4 col-md-8">
                        <div class="ps-item">
                            <h3><?php echo $row['mem_duration'] ?></h3>
                            <div class="pi-price">
                                <h2>₹<?php echo $row['mem_price'] ?></h2>

                            </div>
                            <ul>
                                <?php
                                $fac = $row['mem_descp'];
                                $facility = explode(",", $fac);
                                foreach ($facility as $value) { ?>
                                    <li><?php echo $value ?></li>
                                <?php } ?>


                            </ul>
                            <a href="" class="primary-btn pricing-btn" data-toggle="modal" data-target="#exampleModalCenter<?php echo $row['mem_id'] ?>">Enroll now</a>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter<?php echo $row['mem_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Membership Payment</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        <h3 style="text-align: center;">Scan and Pay</h3>
                                    </div>
                                    <div>

                                        <img src="img/qrcd.png" alt="" style="width:200px;height:200px;margin-left:130px">
                                        <h5 style="text-align: center;margin-top:10px;margin-bottom:10px">Pay Amount</h5>
                                        <form action="controller/mempayment.php" method="POST">
                                            <input type="hidden" name="memid" value="<?php echo $row['mem_id'] ?>">
                                            <input type="hidden" name="gymid" value="<?php echo $gymid ?>">
                                        <input type="text" class="form-class" name="transaction" id="" placeholder="0000 0000 0000" maxlength="16" minlength="16" style="margin-left: 130px;">
                                        <div class="modal-footer">

                                            <button type="submit" name="pay" class="btn btn-primary">Pay</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php }
                ?>
            </div>


        </div>
    </section>

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