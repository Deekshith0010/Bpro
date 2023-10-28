<?php
include '../config.php';
$admin = new Admin();

$gid = $_SESSION['gid'];

if (isset($_POST['updatemem'])) {
    $title = $_POST['title'];
    $descp = $_POST['descp'];
    $amt = $_POST['amt'];
    $duration = $_POST['duration'];
    $memid = $_POST['memid'];


    $stmt = $admin->cud("UPDATE `membership` SET `mem_title`='$title',`mem_descp`='$descp',`mem_price`='$amt',`mem_duration`='$duration' WHERE `mem_id`='$memid'", "updated");
    echo "<script>window.location='../template/viewmembership.php';</script>";
}
