<?php
include '../config.php';
$admin = new Admin();

$gymid = $_GET['gymid'];

$stmt = $admin->cud("DELETE FROM `gym` WHERE `gym_id`='$gymid'", "Deleted");
echo "<script>alert('Deleted.'); window.location='../template/viewgym.php';</script>";
