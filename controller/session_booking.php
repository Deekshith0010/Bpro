<?php
include '../config.php';
$admin=new Admin();

$uid=$_SESSION['uid'];

$trid=$_GET['trid'];
$sgid=$_GET['sgid'];

$stmt=$admin->cud("INSERT INTO `session_book`(`tr_id`,`sg_id`,`user_id`,`urequest_status`,`urequest_date`)VALUES('$trid','$sgid','$uid','pending',now())","inserted");
echo "<script>window.location='../viewsessionstatus.php';</script>";
?>