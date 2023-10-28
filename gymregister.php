<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Center</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
  rel="stylesheet"
/>

    <style>
        .gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
    </style>
</head>
<body>
    



<section class="vh-130 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Gym Registration</h2>
              <p class="text-white-50 mb-5">Please enter your details!</p>


                <form action="gym/controller/gymregister.php" method="POST" enctype="multipart/form-data">

              <div class="form-outline form-white mb-4">
                <input type="text" id="typeEmailX"  name="name" class="form-control form-control-lg" required/>
                <label class="form-label" for="typeEmailX">User Name</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="tel" id="typeEmailX" name="pno" class="form-control form-control-lg" pattern="[0-9]{10}" title="Please Enter Valid Number" required/>
                <label class="form-label" for="typeEmailX">Phone Number</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="file" id="typeEmailX" name="certificate" class="form-control form-control-lg" required/>
                <label class="form-label" for="typeEmailX">Upload Certificate</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="file" id="typeEmailX" name="image" class="form-control form-control-lg" required/>
                <label class="form-label" for="typeEmailX">Upload Image</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg" required/>
                <label class="form-label" for="typeEmailX">Email</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="text" name="address" id="typeEmailX" class="form-control form-control-lg" required/>
                <label class="form-label" for="typeEmailX">Address</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="text" name="about" id="typeEmailX" class="form-control form-control-lg" required/>
                <label class="form-label" for="typeEmailX">About</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
                <label class="form-label" for="typePasswordX">Password</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" name="repassword" class="form-control form-control-lg" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
                <label class="form-label" for="typePasswordX">Confirm Password</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit" name="gymregister">Register</button>

              

            </div>
            </form>

            <div>
              <p class="mb-0">Already a user? <a href="userlogin.php" class="text-white-50 fw-bold">Login</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
></script>
</body>
</html>