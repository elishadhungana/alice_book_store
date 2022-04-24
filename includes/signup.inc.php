<?php

if (isset($_POST['submit'])) {

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    require_once 'dbh.inc.php';
    require 'functions.inc.php';


    if (emptyInputSignup($firstName, $lastName, $email, $phoneNumber, $password, $confirmPassword) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (passwordMatch($password, $confirmPassword) !== false) {
        header("location: ../signup.php?error=passworddonotmatch");
        exit();
    }

    if (emailExits($conn, $email) !== false) {
        header("location: ../signup.php?error=emailalreadytaken");
        exit();
    }

    createUser($conn, $firstName, $lastName, $email, $phoneNumber, $password);

} else {
    header("location: ../signup.php");
    exit();
}
