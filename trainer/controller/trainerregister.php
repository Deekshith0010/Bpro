<?php
include '../config.php';
$admin = new Admin();


if (isset($_POST['trainerregister'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pno = $_POST['pno'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $about = $_POST['about'];
    $dob = date('y-m-d', strtotime($_POST['dob']));

    $weight = $_POST['weight'];
    $height = $_POST['height'];

    $occ = $_POST['occuption'];
    $know = $_POST['know'];
    $exp = $_POST['exp'];


    $target = 'upload/';
    $image = $target . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $image);


    $certificate = $target . basename($_FILES['certificate']['name']);
    move_uploaded_file($_FILES['certificate']['tmp_name'], $certificate);

    $stmt = $admin->ret("SELECT * FROM `trainer` WHERE `tr_email`='$email' ");
    $num = $stmt->rowCount();

    if ($num > 0) {
        echo "<script> alert('email already exist');
        window.location='../trainerlogin.php';
         </script>";
    } else {

        if ($password == $repassword) {
            $pass = password_hash($password, PASSWORD_BCRYPT);

            $stmt2 = $admin->Rcud("INSERT INTO `trainer`(`tr_name`, `tr_phone`, `tr_email`, `tr_cert`, `tr_img`,`tr_about`,`dob`,`tr_weight`,`tr_height`,`tr_occ`,`tr_know`,`tr_exp`,`tr_address`,`tr_password`,`tr_status`,`tr_date`) 
            VALUES ('$name','$pno','$email','$certificate','$image','$about','$dob','$weight','$height','$occ','$know','$exp','$address','$pass','pending',now())");



            $stmt5 = $admin->ret("SELECT * FROM `trainer` WHERE `tr_id`='$stmt2'");
            $row5 = $stmt5->fetch(PDO::FETCH_ASSOC);
            if ($stmt2) {
                if ($row5['tr_status'] == 'pending') {
                    echo "<script>
                    window.location='../../trainerwaitpage.php?trid=$stmt2';
                     </script>";
                }
            } else {
                echo "<script>alert('something went wrong,please try again');
                window.location='../../trainerregister.php';
                </scrpit>";
            }
        } else {
            echo "<script>alert('Password did not match, try again');
            window.location='../../trainerregister.php';
             </script>";
        }
    }
}
?>