<?php

include '../config.php';
$admin = new Admin();
if (isset($_POST['userlogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $admin->ret("SELECT * FROM `user` WHERE `user_email` ='$email' ");

    $num = $stmt->rowCount();
    if ($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $dbpass = $row['user_password'];

        if (password_verify($password, $dbpass)) {
            $_SESSION['uid'] = $row['user_id'];
            echo "<script>alert('login successful');
                window.location='../index.php';

                </script>";
        } else {
            echo "<script>alert('you have entered worng password');
              history.back(); </script>";
        }
    } else {
        echo "<script>alert('you are not  valid user');
        history.back(); </script>";
    }
}
