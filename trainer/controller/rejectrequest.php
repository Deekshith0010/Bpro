<?php
include '../config.php';
$admin=new Admin();

$trid=$_SESSION['tid'];
$bookid=$_GET['sbookid'];

$stmt=$admin->cud("UPDATE `session_book` SET `urequest_status`='rejected' WHERE `urequest_id`='$bookid' ","updated");
echo "<script>window.location='../template/viewuserrequest.php';</script>";
?>