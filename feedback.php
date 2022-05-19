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
  <title>Alice Book Store</title>
  <style>
       section {
         padding: 50px;
       }
   </style>
  <link rel="stylesheet" href="../../AliceBooks/css/cart/style.css">
  <!-- bootstrap css CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <!--Section: Contact v.2-->
  <section class="mb-4">

      <!--Section heading-->
      <h2 class="h1-responsive font-weight-bold text-center my-4">Feedback Form</h2>
      <!--Section description-->
      <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
          a matter of hours to help you.</p>

      <div class="row">

          <!--Grid column-->
          <div class="col-md-9 mb-md-0 mb-5">
              <form action="includes/feedback.inc.php" method="POST">

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                      <div class="col-md-6" style="padding: 10px;">
                          <div class="md-form mb-0">
                              <input required type="text" id="name" name="name" class="form-control">
                              <label for="name" class="">Your name</label>
                          </div>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6" style="padding: 10px;">
                          <div class="md-form mb-0">
                              <input required type="text" id="email" name="email" class="form-control">
                              <label for="email" class="">Your email</label>
                          </div>
                      </div>
                      <!--Grid column-->

                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">
                      <div class="col-md-12" style="padding: 10px;">
                          <div class="md-form mb-0">
                              <input required type="text" id="subject" name="subject" class="form-control">
                              <label for="subject" class="">Subject</label>
                          </div>
                      </div>
                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                      <div class="col-md-12" style="padding: 10px;">

                          <div class="md-form">
                              <textarea required type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                              <label for="message">Your message</label>
                          </div>

                      </div>
                  </div>
                  <!--Grid row-->

              <div class="d-flex justify-content-end pt-3">
                <button type="submit" name="submit" class="btn btn-warning btn-lg ms-2">Submit Feedback</button>
              </div>
              <div class="status"></div>

            </form>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-3 text-center">
              <ul class="list-unstyled mb-0">
                  <li><i class="fas fa-map-marker-alt fa-2x"></i>
                      <p>Central London, CL UB5 5UQ, UK</p>
                  </li>

                  <li><i class="fas fa-phone mt-4 fa-2x"></i>
                      <p>+44 7585538569</p>
                  </li>

                  <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                      <p>contact@alicebookstore.com</p>
                  </li>
              </ul>
          </div>
          <!--Grid column-->

      </div>

      <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
            echo "<p style='color:red;'><strong>All Fields Required!</strong></p>";
          }
        }
      ?>

  </section>
  <!--Section: Contact v.2-->


<?php
    # footer component
    include_once 'footer.php';
?>
