<?php
include '../config.php';
$admin = new Admin();

if(isset($_POST['gymregister'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pno = $_POST['pno'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $about = $_POST['about'];


    $target = 'upload/';
    $image = $target.basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'],$image);

    $certificate= $target.basename($_FILES['certificate']['name']);
    move_uploaded_file($_FILES['certificate']['tmp_name'],$certificate);

    $stmt = $admin->ret("SELECT * FROM `gym` WHERE `gym_email`='$email' ");
    $num = $stmt->rowCount();

    if($num>0){
        echo "<script> alert('email already exist');
        window.location='../../gymlogin.php';
         </script>";

    }else{

        if($password == $repassword){
            $pass = password_hash($password,PASSWORD_BCRYPT);
            
            $stmt2 = $admin->Rcud("INSERT INTO `gym`(`gym_name`,`gym_phone`,`gym_email`,`gym_cert`,`gym_img`,`gym_about`,`gym_address`,`gym_password`,`gym_status`,`gym_date`) 
            VALUES ('$name','$pno','$email','$certificate','$image','$about','$address','$pass','pending',now())");

            $stmt5=$admin->ret("SELECT * FROM `gym` WHERE `gym_id`='$stmt2'");
            $row5=$stmt5->fetch(PDO::FETCH_ASSOC);
            
            if($stmt2){
                if($row5['gym_status']=='pending'){
                    echo "<script>
                    window.location='../../gymwaitpage.php?gymid=$stmt2';
                     </script>";
                }
                
            } else{
                echo "<script>alert('something went wrong,please try again');
                window.location='../../gymrregister.php';
                </scrpit>";
            }
        }else{
            echo "<script>alert('Password did not match, try again');
            window.location='../../gymregister.php';
             </script>";
        }
    }

}

?>