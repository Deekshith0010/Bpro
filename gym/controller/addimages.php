<?php
include '../config.php';
$admin = new Admin();

$gid = $_SESSION['gid'];

if (isset($_POST['add'])) {

    $target = 'upload/';
    $image = $_FILES['img']['name'];
    $imagePath = $target . basename($image);

    // Generate a unique filename by appending a timestamp
    $imageFilename = time() . '_' . $image;

    // Append the unique filename to the target directory
    $newImagePath = $target . $imageFilename;

    move_uploaded_file($_FILES['img']['tmp_name'], $newImagePath);

    $stmt = $admin->cud("INSERT INTO `gymimage`(`gym_id`, `gym_img`, `gimg_date`) VALUES ('$gid', '$newImagePath', NOW())", "saved");
}

echo "<script>window.location='../template/addimages.php';</script>";
?>
