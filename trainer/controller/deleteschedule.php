<?php
include '../config.php';
$admin = new Admin();

$sid = $_GET['sgid'];

$stmt = $admin->cud("DELETE FROM `session_gym` WHERE `sg_id`='$sid'","Deleted");
echo "<script>alert('Deleted.'); window.location='../template/viewschedule.php';</script>";
