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
</head>
<body>
<section class="signup-form">
    <h2>Sign Up</h2>
    <div class="signup-form-form">
        <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="firstName" placeholder="First Name">
            <input type="text" name="lastName" placeholder="Last Name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="phoneNumber" placeholder="Phone Number">
            <input type="text" name="password" placeholder="Password">
            <input type="text" name="confirmPassword" placeholder="Confirm Password">
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
    <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo "<p>Fill in all fields!</p>";
        }
        elseif ($_GET["error"] == "invalidemail") {
            echo "<p>Please enter proper email format!</p>";
        }
        elseif ($_GET["error"] == "passworddonotmatch") {
          echo "<p>Password not matched!</p>";
        }
        elseif ($_GET["error"] == "emailalreadytaken") {
          echo "<p>Email already registered!</p>";
        }
        elseif ($_GET["error"] == "stmtfailed") {
          echo "<p>Something went wrong, try again!</p>";
        }
        elseif ($_GET["error"] == "none") {
          echo "<p>You are Signed Up!</p>";
        }
      }
    ?>
</section



<?php
    # footer component
    include_once 'footer.php';
?>
