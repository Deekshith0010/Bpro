<?php
include 'config.php';
$admin = new Admin();

$uid = $_SESSION['uid'];

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>B-pro</title>

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

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />
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
                        <span>Status</span>
                        <h2>Your Membership Details</h2>
                    </div>
                </div>
            </div>

            <section class="class-timetable-section class-details-timetable spad">
                <div class="class-timetable details-timetable">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    Slno
                                </th>
                                <th>
                                    Gym Name
                                </th>
                                <th>
                                    Membership Duration
                                </th>
                                <th>
                                    Purchase Date
                                </th>
                                <th>
                                    Valid Till
                                </th>
                                <th>
                                    Receipt
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-light">
                            <?php
                            $count = 1;

                            $stmt2 = $admin->ret("SELECT * FROM `mem_payment` INNER JOIN `gym` ON gym.gym_id=mem_payment.gym_id INNER JOIN `membership` ON membership.mem_id=mem_payment.mem_id INNER JOIN `user` ON user.user_id=mem_payment.user_id WHERE mem_payment.user_id='$uid'");
                            while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) { ?>
                                <tr>
                                    <td>
                                        <?php echo $count++ ?>
                                    </td>
                                    <td>
                                        <?php echo $row['gym_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['mem_duration'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['mpay_date'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['expiry_date'] ?>
                                    </td>
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#exampleModalCenter<?php echo $row['mpay_id'] ?>"><i class="fa fa-file-text" style="font-size: 30px;"></i> </a>
                                    </td>
                                </tr>




                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter<?php echo $row['mpay_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background: #9BCDD2;">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Membership Payment Receipt</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body mx-4">
                                                        <div class="container">
                                                            <p style="font-size: 25px;">Thank for your purchase</p>
                                                            <div class="row">
                                                                <ul class="list-unstyled">
                                                                    <li class="text-black">To:&nbsp;<?php echo $row['user_name'] ?></li><li class="text-muted mt-1">
                                                                    <li class="text-black mt-1">Purchase Date:&nbsp;<?php echo $row['mpay_date'] ?></li>
                                                                    <li class="text-black mt-1">Valid Till:&nbsp;<?php echo $row['expiry_date'] ?></li>
                                                                </ul>
                                                                <hr>
                                                              
                                                                <div class="col-xl-10">
                                                                <h6 >Duration</h6>
                                                                    <p class="text-dark"><?php echo $row['mem_duration'] ?></p>
                                                                </div>
                                                               
                                                                <div class="col-xl-2">
                                                                <h6>Total</h6>
                                                                    <p class="float-end text-dark">₹<?php echo $row['mem_price'] ?>
                                                                    </p>
                                                                </div>
                                                                <hr>
                                                            </div>
                                                           


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>

                        </tbody>
                    </table>
                </div>
            </section>


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


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
</body>

</html>