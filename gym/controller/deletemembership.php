<?php
include '../config.php';
$admin = new Admin();

$mid = $_GET['mid'];

$stmt = $admin->cud("DELETE FROM `membership` WHERE `mem_id`='$mid'", "Deleted");
echo "<script>alert('Deleted.');window.location='../template/viewmembership.php';</script>";
