<?php 
include '../config.php';
$admin=new Admin();

session_destroy();

header('Location:login.php');
?>