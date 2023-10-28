<?php
include '../config.php';
$admin=new Admin();

$trid=$_GET['trid'];

$stmt=$admin->cud("UPDATE `trainer` SET `tr_status`='rejected' WHERE `tr_id`='$trid'","updated");
echo "<script>window.location='../template/viewtrainer.php';</script>";
?>