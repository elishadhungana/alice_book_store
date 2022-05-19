<?php

    # header component
    // include_once 'header.php';
    require_once './cart/header.php';

    require_once './includes/component.php';
    require_once './includes/dbh.inc.php';

    if (isset($_POST['add'])){

      if(isset($_SESSION['cart'])){

          $item_array_id = array_column($_SESSION['cart'], "product_id");

          if (in_array($_POST['product_id'], $item_array_id)) {
            echo "<script>alert('Product is already added in the cart')</script>";
            echo "<script>window.location='index.php'</script>";
          } else {
              $count = count($_SESSION['cart']);
              $item_array = array(
                      'product_id' => $_POST['product_id']
              );
              $_SESSION['cart'][$count] = $item_array;
          }
      }
      else {
        $item_array = array(
                'product_id' => $_POST['product_id']
        );
        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
    }
}
?>


<h2 style="color: red; padding: 40px; text-align: center; "> <strong>Welcome To Alice Book Store, you can purchase items here </strong> </h2>




  <h4 class="display-5" style="text-align: center;"> <strong>Books </strong> </h4>

<!--- Cards -->
<div class="container">
  <div class="row text-center py-5">
    <?php
      $sql = "SELECT * FROM book_product";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
        }
      }
    ?>
  </div>
</div>

<!--- Browse Stationeries -->
<!-- <div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h4 class="display-5">Stationeries </h4>
        </div>
    </div>
</div> -->

<h4 class="display-5" style="text-align: center;"> <strong>Stationeries </strong> </h4>

<!--- Cards -->
<div class="container">
  <div class="row text-center py-5">
    <?php
      $sql = "SELECT * FROM stationeries_product";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
        }
      }
    ?>
  </div>
</div>

<!--- Browse OfficeItems -->
<!-- <div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h4 class="display-5">Office Items </h4>
        </div>
    </div>
</div> -->

<h4 class="display-5" style="text-align: center;"> <strong>Office Items </strong></h4>

<!--- Cards -->
<div class="container">
  <div class="row text-center py-5">
    <?php
      $sql = "SELECT * FROM office_item_product";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
        }
      }
    ?>
  </div>
</div>






<?php
    # footer component
    include_once 'footer.php';
?>
