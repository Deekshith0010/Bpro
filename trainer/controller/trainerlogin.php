<?php

include '../config.php';
$admin = new Admin();
if (isset($_POST['trainerlogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $admin->ret("SELECT * FROM `trainer` WHERE `tr_email` ='$email' ");

    $num = $stmt->rowCount();
    if ($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $dbpass = $row['tr_password'];

        if (password_verify($password, $dbpass)) {
            $_SESSION['tid'] = $row['tr_id'];
            echo "<script>alert('login successful');
                window.location='../template/index.php';

                </script>";
        } else {
            echo "<script>alert('you have entered worng password');
                window.location='../../trainerlogin.php';</script>";
        }
    } else {
        echo "<script>alert('you are not  valid user');
            window.location='../../trainerlogin.php';
            </script>";
    }
}
