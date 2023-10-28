<?php
include '../config.php';
$admin=new Admin();

$uid=$_SESSION['uid'];

if(isset($_POST['pay'])){
    $memid=$_POST['memid'];
    $gymid=$_POST['gymid'];
    $transaction=$_POST['transaction'];

    $stmt1=$admin->ret("SELECT * FROM `membership` WHERE `mem_id`='$memid'");
    $row=$stmt1->fetch(PDO::FETCH_ASSOC);
    $amt=$row['mem_price'];
  

$dt=date('y-m-d');


// Assuming you have retrieved the duration from the database and stored it in the $durationFromDatabase variable
$durationFromDatabase = $row['mem_duration']; // Example: duration retrieved from the database

// Extract the numeric value and duration type from the duration string
$durationParts = explode(" ", $durationFromDatabase);
$duration = intval($durationParts[0]); // Convert to integer
$durationType = $durationParts[1]; // e.g., "year"

// Assuming the purchase date is June 1, 2023
$purchaseDate = new DateTime($dt);

// Create a DateInterval object based on the retrieved duration
if ($durationType === "month") {
    $dateInterval = new DateInterval('P' . $duration . 'M');
} elseif ($durationType === "year") {
    $dateInterval = new DateInterval('P' . $duration . 'Y');
} 
// Add the DateInterval to the purchase date
$expiryDate = $purchaseDate->add($dateInterval);

// Format the expiry date as desired (e.g., 'Y-m-d' for year-month-day format)
$expiryDateFormatted = $expiryDate->format('Y-m-d');


				
  $stmt=$admin->cud("INSERT INTO `mem_payment`(`gym_id`,`user_id`,`mem_id`,`trans_id`,`amount`,`mpay_date`,`expiry_date`)VALUES('$gymid','$uid','$memid','$transaction','$amt',now(),'$expiryDateFormatted')","inserted");
  echo "<script>window.location='../viewmemstatus.php';</script>";

}
?>
