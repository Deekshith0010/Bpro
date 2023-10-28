<?php
include '../config.php';
$admin=new Admin();

$gymid=$_GET['gymid'];

$stmt=$admin->cud("UPDATE `gym` SET `gym_status`='accepted' WHERE `gym_id`='$gymid'","updated");
echo "<script>window.location='../template/viewgym.php';</script>";
?>