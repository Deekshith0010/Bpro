<?php
include '../config.php';
$admin=new Admin();

$rid=$_GET['rid'];

$stmt=$admin->cud("UPDATE `request` SET `req_status`='rejected' WHERE `req_id`='$rid'","updated");
echo "<script>window.location='../template/viewrequest.php';</script>";
?>