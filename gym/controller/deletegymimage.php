<?php
include '../config.php';
$admin = new Admin();

$gimgid = $_GET['gimgid'];

$stmt = $admin->cud("DELETE FROM `gymimage` WHERE `gimg_id`='$gimgid'", "Deleted");
echo "<script>alert('Deleted.'); window.location='../template/addimages.php';</script>";
