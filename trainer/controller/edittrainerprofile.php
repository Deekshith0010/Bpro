<?php
include '../config.php';
$admin=new Admin();

$trid=$_SESSION['tid'];

if(isset($_POST['editprofile'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $occ=$_POST['occ'];
    $know=$_POST['know'];
    $address=$_POST['address'];
    $about=$_POST['about'];
    $weight=$_POST['weight'];
    $height=$_POST['height'];

    $photo=basename($_FILES['img']['name']);

    $target="upload/";
    $image=$target.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$image);

    if(empty($photo)){
        $stmt=$admin->ret("SELECT * FROM `trainer` WHERE `tr_id`='$trid'");
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        $ig=$row['tr_img'];

        $stmt2=$admin->cud("UPDATE `trainer` SET `tr_name`='$name',`tr_phone`='$phone',`tr_img`='$ig',`tr_occ`='$occ',`tr_know`='$know',`tr_address`='$address',`tr_about`='$about',`tr_weight`='$weight',`tr_height`='$height'","Updated");
        echo "<script>window.location='../template/profile.php';</script>";
    } else {
        $stmt2=$admin->cud("UPDATE `trainer` SET `tr_name`='$name',`tr_phone`='$phone',`tr_img`='$image',`tr_occ`='$occ',`tr_know`='$know',`tr_address`='$address',`tr_about`='$about',`tr_weight`='$weight',`tr_height`='$height'","Updated");
        echo "<script>window.location='../template/profile.php';</script>";
    }


}
?>