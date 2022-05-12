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
