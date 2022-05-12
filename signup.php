<?php
    # header component
    // include_once 'header.php';
    require_once '../AliceBooks/cart/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
       p {
           color: red;
           font-size: 20px;
           text-align: center;
       }
   </style>
  <link rel="stylesheet" href="../../AliceBooks/css/cart/style.css">
  <!-- bootstrap css CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<section class="h-70">
  <div class="container py-5 h-70">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" /> -->
                <!-- <img src="../AliceBooks/images/register.jpg" alt="Sample photo"
                style="border-top-left-radius: .35rem; border-bottom-left-radius: .25rem;" /> -->
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Student registration form</h3>
                <form action="includes/signup.inc.php" method="POST">
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="firstName" id="form3Example1m" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">First name</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="lastName" id="form3Example1n" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">Last name</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="email" id="form3Example1n" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">Email</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="phoneNumber" id="form3Example1n" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">Phone Number</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="password" id="form3Example1n" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">Password</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="confirmPassword" id="form3Example1n" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">confirm Password</label>
                    </div>
                  </div>

                </div>
                <div class="d-flex justify-content-end pt-3">
                  <button type="submit" name="submit" class="btn btn-warning btn-lg ms-2">Sign Up</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p><strong>Fill in all fields!</strong></p>";
    }
    elseif ($_GET["error"] == "invalidemail") {
        echo "<p><strong>Please enter proper email format!</strong></p>";
    }
    elseif ($_GET["error"] == "passworddonotmatch") {
      echo "<p><strong>Password not matched!</strong></p>";
    }
    elseif ($_GET["error"] == "emailalreadytaken") {
      echo "<p><strong>Email already registered!</strong></p>";
    }
    elseif ($_GET["error"] == "stmtfailed") {
      echo "<p><strong>Something went wrong, try again!</strong></p>";
    }
    elseif ($_GET["error"] == "none") {
      echo "<p><strong>You are Signed Up!</strong></p>";
    }
  }
?>
</section>


<?php
    # footer component
    include_once 'footer.php';
?>
