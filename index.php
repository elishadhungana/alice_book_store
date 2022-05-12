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


<!--- Browse books -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h4 class="display-5">Books </h4>
        </div>
    </div>
</div>


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
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h4 class="display-5">Stationeries </h4>
        </div>
    </div>
</div>


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
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h4 class="display-5">Office Items </h4>
        </div>
    </div>
</div>


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


<!-- About Alice Book Store -->
<div class="container-fluid padding">
    <div class="row">
        <div class="col-lg-6">
            <img src="images/bookimage.jpg" class="rounded img-fluid">
        </div>
        <div class="col-md-12 col-lg-6">
            <h2>About Alice Book Store</h2>
            <p>The columns will automatically stack on each other when
                the screen is less than 576px wide.</p>
            <p>Resize the browserwindow to see the effect. Responsive web
                design has become more important as the amount of mobile traffic now
                accounts for more than half of total internet traffic.</p>
            <p>Resize the browserwindow to see the effect. Responsive web
                design has become more important as the amount of mobile traffic now
                accounts for more than half of total internet traffic.</p>

            <p>It can also display the web page differently depending on the
                screen size or viewing device.</p>
            <br>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>

    </div>
</div>



<!--- Two Column Section -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-12 col-lg-6">
            <h2>Why choose Alice Book Store? </h2>
            <p>We know that greatness in a disruptive era requires bold
                ambition, curious talent and a culture that believes we're
                smarter together.</p>
            <p>We approach every challenge hostically, with best-in-class
                expertise in data, creativity, media, technology, search, social and
                more. We call this Alchemy. It has the power to build our clients'
                brands and transform their business. And white it may seem like
                magic, we've got it down to a science.
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
