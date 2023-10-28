<?php
include '../config.php';
$admin = new Admin();

$trid = $_GET['trid'];

$stmt = $admin->cud("DELETE FROM `trainer` WHERE `tr_id`='$trid'", "Deleted");
echo "<script>alert('Deleted.'); window.location='../template/viewtrainer.php';</script>";
