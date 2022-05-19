<?php

  if (isset($_POST["submit"])) {

    $fullName = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputFeedbackForm($fullName, $email, $subject, $message) !== false) {
        header("location: ../feedback.php?error=emptyinput");
        exit();
    }

    sendFeedback($conn, $fullName, $email, $subject, $message);

  } else {
      header("location: ../feedback.php");
      exit();
  }

  // $to = 'amrit.exotrac@gmail.com';
  // $subject = 'Form Submission';
  // $message = $message;
  // $headers = "From: ".$email;
  //
  // if (mail($to, $subject, $message, $headers)) {
  //   echo "<h1>Sent Successfully! Thank You"." ".$fullName.", We will contact you shortly!</h1>";
  // } else {
  //   echo "Something went wrong";
  // }
// }
