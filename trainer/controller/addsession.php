    <?php
    include '../config.php';
    $admin=new Admin();

    $trid=$_SESSION['tid'];


    if(isset($_POST['addsession'])){
        $session=$_POST['session'];

        $stmt=$admin->cud("INSERT INTO `session`(`tr_id`,`sessions`,`date`)VALUES('$trid','$session',now())","inserted");
        echo "<script>window.location='../template/addsession.php';</script>";
    }


    ?>