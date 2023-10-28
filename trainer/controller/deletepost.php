<?php
include '../config.php';
$admin = new Admin();

$pid = $_GET['pid'];

$stmt = $admin->cud("DELETE FROM `post` WHERE `post_id`='$pid'", "Deleted");
echo "<script>alert('Deleted.'); window.location='../template/viewpost.php';</script>";
