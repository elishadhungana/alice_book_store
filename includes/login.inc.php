<?php

  if (isset($_POST["submit"])) {

    $userName = $_POST["email"];
    $password = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($userName, $password) !== false) {
      header("location: ../login.php?error=emptyinput");
      exit();
    }

    loginUser($conn, $userName, $password);
  }
  else {
    location("location: ../login.php");
    exit();
  }
