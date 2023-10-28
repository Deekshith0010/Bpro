deleteuser.php<?php
include '../config.php';
$admin = new Admin();

$uid = $_GET['uid'];

$stmt = $admin->cud("DELETE FROM `user` WHERE `user_id`='$uid'", "Deleted");
echo "<script>alert('Deleted.'); window.location='../template/viewuser.php';</script>";
