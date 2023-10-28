<?php
include '../config.php';
$admin=new Admin();

$trid=$_SESSION['tid'];

$gymid=$_GET['gymid'];

$stmt=$admin->cud("INSERT INTO `request`(`gym_id`,`tr_id`,`req_status`,`req_date`)VALUES('$gymid','$trid','pending',now())","inserted");
echo "<script>window.location='../template/requestgym.php';</script>";
?>