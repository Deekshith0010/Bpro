<?php
include '../config.php';
$admin = new Admin();

$postid = $_SESSION['gid'];

if (isset($_POST['updatepost'])) {
    $title = $_POST['title'];
    $descp = $_POST['descp'];
    $postid = $_POST['postid'];



    $stmt = $admin->cud("UPDATE `post` SET `post_title`='$title',`post_about`='$descp' WHERE `post_id`='$postid'", "updated");
    echo "<script>window.location='../template/viewpost.php';</script>";
}
