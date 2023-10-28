<?php
include '../config.php';
$admin = new Admin();

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pno = $_POST['pno'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    $target = 'upload/';
    $image = $_FILES['image']['name'];

    // Generate a unique filename by appending a timestamp
    $imageFilename = time() . '_' . $image;

    // Append the unique filename to the target directory
    $imagePath = $target . $imageFilename;

    move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

    $stmt = $admin->ret("SELECT * FROM `user` WHERE `user_email`='$email' ");
    $num = $stmt->rowCount();

    if($num > 0){
        echo "<script> alert('Email already exists');
        window.location='../userlogin.php';
         </script>";
    }else{
        if($password == $repassword){
            $pass = password_hash($password, PASSWORD_BCRYPT);

            $stmt2 = $admin->cud("INSERT INTO `user` (`user_name`, `user_phone`, `user_address`, `user_img`, `user_email`, `user_password`, `user_date`) VALUES ('$name', '$pno', '$address', '$imagePath', '$email', '$pass', NOW())", "saved");
            if($stmt2){
                echo "<script>alert('Registered successfully');
                window.location='../userlogin.php';
                 </script>";
            } else{
                echo "<script>alert('Something went wrong, please try again');
                window.location='../userregister.php';
                </script>";
            }
        } else{
            echo "<script>alert('Password did not match, try again');
            window.location='../userregister.php';
             </script>";
        }
    }
}
?>
