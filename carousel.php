<?php

  require_once './includes/dbh.inc.php';

  $result = $conn->query("SELECT image_path FROM carousel");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alice Book Store</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
  <body>
    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
      <?php
        $i = 0;
        foreach ($result as $row) {
          $actives = '';
          if ($i == 0) {
            $actives = 'active';
          }
      ?>
    <li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>

    <?php $i++; } ?>

  </ul>


  <!-- The slideshow -->
  <div class="carousel-inner">

    <?php
      $i = 0;
      foreach ($result as $row) {
        $actives = '';
        if ($i == 0) {
          $actives = 'active';
        }
    ?>

    <div class="carousel-item <?= $actives; ?>">
      <img src="<?= $row['image_path'] ?>" width="100%" height="300">
    </div>

    <?php $i++; } ?>

  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<?php
    # footer component
    include_once 'footer.php';
?>
