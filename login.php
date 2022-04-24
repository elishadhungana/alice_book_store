<?php
    # header component
    // include_once 'header.php';
    require_once '../AliceBooks/cart/header.php';
?>

<section class="signup-form">
    <h2>Log In</h2>
    <div class="signup-form-form">
        <form action="includes/login.inc.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="password" placeholder="Password">
            <button type="submit" name="submit">Log In</button>
        </form>
    </div>
    <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo "<p>Fill in all fields!</p>";
        }
        elseif ($_GET["error"] == "wronglogin") {
            echo "<p>Invalid login credentials!</p>";
        }
      }
    ?>
</section

<?php
    # footer component
    include_once 'footer.php';
?>
