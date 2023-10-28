<?php
include '../config.php';
$admin = new Admin();

$tid = $_SESSION['tid'];

if (isset($_POST['addpost'])) {
    $title = $_POST['title'];
    $descp = $_POST['descp'];

    $target = 'upload/';
    $image = $_FILES['img']['name'];

    // Generate a unique filename by appending a timestamp
    $imageFilename = time() . '_' . $image;

    // Append the unique filename to the target directory
    $imagePath = $target . $imageFilename;

    move_uploaded_file($_FILES['img']['tmp_name'], $imagePath);

    $stmt = $admin->cud("INSERT INTO `post`(`tr_id`, `post_title`, `post_about`, `post_img`, `post_date`) VALUES ('$tid', '$title', '$descp', '$imagePath', NOW())", "saved");
}

echo "<script>window.location='../template/viewpost.php';</script>";
?>
