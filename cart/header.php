<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../AliceBooks/css/cart/style.css">
  <link href="../../AliceBooks/css/style.css" rel="stylesheet">

    <!-- bootstrap css CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font awesome bootstrap CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
  <body>

    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <a href="../../AliceBooks/index.php" class="navbar-brand">
                <h3 class="px-5">
                    <!-- <i class="fas fa-shopping-basket"></i> AliceBook Store -->
                    <i>AliceBook Store</i>
                </h3>
            </a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../../AliceBooks/index.php">Homes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../../AliceBooks/index.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../../AliceBooks/index.php">Connect</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../../AliceBooks/contact.php">Contact</a>
                    </li>

                    <?php
                      if (isset($_SESSION["email"])) {
                        echo '<li class="nav-item">
                            <a class="nav-link" href="profile.php">Profile</a>
                        </li>';
                        echo '<li class="nav-item">
                            <a class="nav-link" href="../AliceBooks/includes/logout.inc.php">Logout</a>
                        </li>';
                      } else {
                        echo '<li class="nav-item">
                            <a class="nav-link" href="../AliceBooks/signup.php">SignUp</a>
                        </li>';
                        echo '<li class="nav-item">
                            <a class="nav-link" href="../AliceBooks/login.php">Login</a>
                        </li>';
                      }
                    ?>
                    <button class="navbar-toggler"
                        type="button"
                            data-toggle="collapse"
                            data-target = "#navbarNavAltMarkup"
                            aria-controls="navbarNavAltMarkup"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="mr-auto"></div>
                        <div class="navbar-nav">
                            <a href="../../AliceBooks/cart/cart.php" class="nav-item nav-link active">
                                <h5 class="px-5 cart">
                                    <i class="fas fa-shopping-cart"></i> Cart
                                    <?php

                                    if (isset($_SESSION['cart'])){
                                        $count = count($_SESSION['cart']);
                                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                                    }else{
                                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                                    }

                                    ?>
                                </h5>
                            </a>
                        </div>
                    </div>
                </ul>
            </div>

        </nav>
    </header>

    <!-- bootstrap CDN JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <!-- </body>
</html> -->
