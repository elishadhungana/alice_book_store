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

<?php
  require_once 'carousel.php';
?>

<!--- Main Component {Categories} -->

<!-- <div class="container-fluid padding">
    <div class="row text-center padding">

      <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="card">
              <div class="card-body">

                  <img src="images/stationer.png" alt="book">
                  <h3>Books</h3>
                  <p>Built with the latest version of HTML, HTML5.</p>

              </div>
          </div>
      </div>

        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-body">

                    <img src="images/stationer.png" alt="book">
                    <h3>STATIONERIES</h3>
                    <p>Built with the latest version of HTML, HTML5.</p>

                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-body">

                    <img src="images/officeitems.png" alt="book">
                    <h3>OFFICE ITEMS</h3>
                    <p>Built with the latest version of HTML, HTML5.</p>
                    <a href="#" class="btn btn-primary">BOOKS</a>
                </div>
            </div>

        </div>

    </div>
</div> -->

<h2 style="color: red; padding: 40px; text-align: center; "> <strong>Welcome To Alice Book Store </strong> </h2>

<!--- Browse books -->
<!-- <div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h4 class="display-5">Books </h4>
        </div>
    </div>
</div> -->

<!-- About Alice Book Store -->
<div class="container-fluid padding">
    <div class="row">
        <div class="col-lg-6">
            <img src="images/bookimage.jpg" class="rounded img-fluid">
        </div>
        <div class="col-md-12 col-lg-6">
            <h2>About Alice Book Store</h2>
            <p>Alice Book Store is founded in 1995. It is located in Holborn Central london</p>
          <p>  It is situated near the universities and a stationary market place. </p>
            <p>Alice book store is a place where different kinds of textbooks or reference books are sold.
               It is a very important place for all especially for the students , normal users, office users. Generally a book shop is situated near school, college or a stationary market place.
              There are kept many shelves on which the books are nicely arranged..</p>
              <p>We provide all the textbooks, office items, stationeries, laptops and computer in reasonable prices. The books are categorized according to the types. We can buy text book, story book, dictionary, pen, pencil, rubber etc. also from it. A bookseller is always available to serve the customers. A bookshop provides us with facilities to expand our knowledge.

            <p>Additionally, you can also get office items and stationeries in Alice Book Store.</p>

            <p>You will get a special discount on purchasing items over 10$.</p>
            <br>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>

    </div>
</div>

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


<!--- Two Column Section -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-12 col-lg-6">
            <h2>Why choose Alice Book Store? </h2>
            <p>10 % Special discount for all the students.</p>
            <p>We provide all the textbooks, office items, stationeries, laptops and computer in reasonable prices.
              We sell new books for readers of all ages and interests. Stop in to browse and get reading recommendations from our staff
               Once you are a member of Alice Book Store, you will get a discount card and get offer of 5% extra on next purchase.
               <p>We provide all the textbooks, office items, stationeries, laptops and computer in reasonable prices. The books are categorized according to the types. We can buy text book, story book, dictionary, pen, pencil, rubber etc. also from it. A bookseller is always available to serve the customers. A bookshop provides us with facilities to expand our knowledge.

            </p>

        </div>
        <div class="col-lg-6">

            <?php require_once 'youtubelink.php'; ?>

        </div>
    </div>

</div>


<!--- Connect -->
<div class="container-fluid padding" id="connectSection">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Connect</h2>
        </div>
        <div class="col-12 social padding">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>

<?php
    # footer component
    include_once 'footer.php';
?>
