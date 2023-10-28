<?php
include '../config.php';
$admin = new Admin();

$gid = $_SESSION['gid'];

if (isset($_POST['addmem'])) {
    $title = $_POST['title'];
    $duration= $_POST['duration'];
    $amt = $_POST['amt'];
    $facilities=$_POST['facilities'];
    $details=implode(",",$facilities);


    $stmt = $admin->cud("INSERT INTO `membership`(`gym_id`,`mem_title`,`mem_price`,`mem_duration`,`mem_descp`,`mem_date`)VALUES('$gid','$title','$amt','$duration','$details',now())", "saved");
    echo "<script>window.location='../template/viewmembership.php';</script>";
}
