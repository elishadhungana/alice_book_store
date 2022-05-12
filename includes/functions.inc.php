<?php

function emptyInputFeedbackForm($fullName, $email, $subject, $message){
    $result;
    if (empty($fullName)
            || empty($email)
            || empty($subject)
            || empty($message)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emptyInputSignup($firstName, $lastName, $email, $phoneNumber, $password, $confirmPassword){
    $result;
    if (empty($firstName)
            || empty($lastName)
            || empty($email)
            || empty($phoneNumber)
            || empty($password)
            || empty($confirmPassword)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $confirmPassword){
    $result;
    if ($password !== $confirmPassword) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emailExits($conn, $email){
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $firstName, $lastName, $email, $phoneNumber, $password){
    $sql = "INSERT INTO users (first_name, last_name, email, phone_number, password) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $email, $phoneNumber, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
    exit();
  }

  function emptyInputLogin($userName, $password){
      $result;
      if (empty($userName) || empty($password)) {
          $result = true;
      } else {
          $result = false;
      }
      return $result;
  }

function loginUser($conn, $userName, $password) {
    $emailExits = emailExits($conn, $userName);

    if ($emailExits === false) {
      header("location: ../login.php?error=wronglogin");
      exit();
    }

    $passwordHashed = $emailExits["password"];
    $checkPassword = password_verify($password, $hashedPassword);

    if ($checkPassword === false) {
      header("location: ../login.php?error=wronglogin");
      exit();
    }
    elseif ($checkPassword === true) {
      session_start();
      $_SESSION["id"] = $emailExits["id"];
      $_SESSION["email"] = $emailExits["email"];
      header("location: ../index.php");
      exit();
    }
  }

  function sendFeedback($conn, $fullName, $email, $subject, $message){
      $sql = "INSERT INTO feedback (full_name, email, subject, message) VALUES (?, ?, ?, ?);";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("location: ../feedback.php?error=stmtfailed");
          exit();
      }

      mysqli_stmt_bind_param($stmt, "ssss", $fullName, $email, $subject, $message);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);

      header("location: ../feedback.php?error=none");
      exit();
    }
