<?php
include '../config.php';
$admin = new Admin();

$sid = $_GET['sid'];

$stmt = $admin->cud("DELETE FROM `session` WHERE `session_id`='$sid'", "Deleted");
echo "<script>alert('Deleted.'); window.location='../template/addsession.php';</script>";
