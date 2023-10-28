<?php
$admin=new Admin();
?>

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="./index.php">
                        <h2 style="color:#9BCDD2;"><b>B-pro</b></h2>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="nav-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>
                            <?php
                            if (!isset($_SESSION['uid'])) { ?>
                                <a href="userlogin.php">Status</a>
                            <?php } else { ?>
                                <a href="#">Status</a>
                                <ul class="dropdown">
                                    <li><a href="viewsessionstatus.php">Request Status</a></li>
                                    <li><a href="viewmemstatus.php">Membership Status</a></li>
                                </ul>
                            <?php }
                            ?>

                        </li>


                        <li><a href="gym.php">Fitness Center</a></li>
                        <li><a href="trainer.php">Trainers</a></li>

                        <li>
                        <?php
                            if (!isset($_SESSION['uid'])) { ?>    
                        <a href="#">Login</a>
                            <ul class="dropdown">
                                <li><a href="userlogin.php">User Login</a></li>
                                <li><a href="gymlogin.php">Gym Login</a></li>
                                <li><a href="trainerlogin.php">Trainer Login</a></li>

                            </ul>
                            <?php } else { ?>
                                <a href="logout.php">Logout</a>
                           <?php } ?>
                        </li>

                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="top-option">
                    <!-- <div class="to-search search-switch">
                        <i class="fa fa-search"></i>
                    </div> -->
                    <!-- <div class="to-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="http://instagram.com/rhythm_.rebels?igshid=MzRIODBiNWFIZA=="><i class="fa fa-instagram"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="canvas-open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>