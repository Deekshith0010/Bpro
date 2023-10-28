<?php
include 'config.php';
$admin = new Admin();

$gymid = $_GET['gymid'];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Please wait ( Wait for me! )</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="waitpage.css">
</head>

<body>
    <?php
    $stmt = $admin->ret("SELECT * FROM `gym` WHERE `gym_id`='$gymid'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row['gym_status'] == 'pending') { ?>
        <div style="display: flex;flex-direction:column">
            <div class="loading">
                <p>Please wait</p>
                <span><i></i><i></i></span>
            </div>


            <div class="vh-100 d-flex justify-content-center align-items-center" style="margin-top: -100px;">
                <div class="col-md-4">
                    <div class="border border-3 border-success"></div>
                    <div class="card  bg-white shadow p-5">
                        <div class="mb-4 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                            </svg>
                        </div>
                        <div class="text-center">
                            <h1>Please wait!</h1>
                            <p>Until your request get accepted.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else  if ($row['gym_status'] == 'accepted') { ?>
        <div style="display: flex;flex-direction:column">
            <div class="loading">
                <p>Please wait</p>
                <span><i></i><i></i></span>
            </div>


            <div class="vh-100 d-flex justify-content-center align-items-center" style="margin-top: -100px;">
                <div class="col-md-4">
                    <div class="border border-3 border-success"></div>
                    <div class="card  bg-white shadow p-5">
                        <div class="mb-4 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                            </svg>
                        </div>
                        <div class="text-center">
                            <h1>Request Accepted!</h1>
                            <p>You can login now.</p>
                            <a href="gymlogin.php" class="btn btn-outline-success">Login Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else  if ($row['gym_status'] == 'rejected') { ?>
        <div style="display: flex;flex-direction:column">


        <div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="col-md-4">
        <div class="border border-3 border-success"></div>
        <div class="card bg-white shadow p-5">
            <div class="mb-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-success align-middle" width="75" height="75" fill="currentColor" viewBox="0 0 24 24">
                    <circle cx="12" cy="19" r="2" fill="#fff"/>
                    <path d="M11 15h2v2h-2zm0-10h2v6h-2z"/>
                </svg>
            </div>
            <div class="text-center">
                <h1>Rejected!</h1>
                <p>Your request has been rejected.</p>
            </div>
        </div>
    </div>
</div>




        </div>
    <?php } ?>

</body>

</html>