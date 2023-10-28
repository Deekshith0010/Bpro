
<?php
$admin=new Admin();
$gymid=$_SESSION['gid'];
$stmt13=$admin->ret("SELECT * FROM `gym` WHERE `gym_id`='$gymid'");
$row13=$stmt13->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
        </div>
        <div>
            <a class="navbar-brand brand-logo" href="index.php">
                <h2><b>B-pro</b></h2>
                <!-- <img src="images/logo.svg" alt="logo" /> -->
            </a>
            <a class="navbar-brand brand-logo-mini" href="">
                <img src="images/logo-mini.svg" alt="logo" />
            </a>
            
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                <h1 class="welcome-text"><span class="text-black fw-bold">Fitness Center</span></h1>
                <h3><?php echo $row13['gym_name']  ?></h3>

            </li>
        </ul>
        <ul class="navbar-nav ms-auto">

            <li class="nav-item d-none d-lg-block">
                <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                    <span class="input-group-addon input-group-prepend border-right">
                        <span class="icon-calendar input-group-text calendar-icon"></span>
                    </span>
                    <input type="text" class="form-control">
                </div>
            </li>

            <li class="nav-item dropdown d-none d-lg-block user-dropdown">

                <a class="dropdown-item" href="logout.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign
                    Out</a>

            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
</body>
</html>