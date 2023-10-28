<?php
include '../config.php';
$admin=new Admin();

$trid=$_SESSION['tid'];


if(isset($_POST['add'])){
    $session=$_POST['session'];
    $amount=$_POST['amount'];
    $gym=$_POST['gym'];

    $stmt=$admin->cud("INSERT INTO `session_gym`(`session_id`,`tr_id`,`gym`,`price`,`date`)VALUES('$session','$trid','$gym','$amount',now())","inserted");
    echo "<script>window.location='../template/viewschedule.php';</script>";
}


?>