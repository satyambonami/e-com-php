<?php 
  include("./inc/conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<?php 
		$page_name = "services";
		include("./inc/head.php"); 

	?>

<body>

  <!--PreLoader-->
  <div class="loader">
    <div class="loader-inner">
      <div class="circle"></div>
    </div>
  </div>
  <!--PreLoader Ends-->

  <!-- header -->
  <?php include("./inc/nav.php"); ?>


  <!-- breadcrumb-section -->
  <div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="breadcrumb-text">
            <p>Fresh and Organic</p>
            <h1>Shop</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end breadcrumb section -->

  <!-- products -->
  <div class="product-section mt-150 mb-150">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <div class="product-filters">
            <ul>
              <li class="active" data-filter="*">All</li>
              <li data-filter=".strawberry">Strawberry</li>
              <li data-filter=".berry">Berry</li>
              <li data-filter=".lemon">Lemon</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row product-lists">
        <?php 
          $sql = "SELECT * FROM `addproduct`";
          $query = mysqli_query($conn , $sql);
          while ($row = mysqli_fetch_assoc($query)){
        ?>
        <div class="col-lg-4 col-md-6 text-center <?php echo $row['product_category']; ?>">
          <div class="single-product-item">
            <div class="product-image">
              <a href="single-product.php"><img src="./admin/assets/product_image/<?php echo $row['product_image']; ?>"
                  alt=""></a>
            </div>
            <h3><?php echo $row['product_name']; ?></h3>
            <p class="product-price"><span>Per Kg</span> <?php echo $row['product_rate']; ?>$ </p>
            <a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
          </div>
        </div>
        <?php } ?>
        <!-- <div class="col-lg-4 col-md-6 text-center berry">
          <div class="single-product-item">
            <div class="product-image">
              <a href="single-product.php"><img src="assets/img/products/product-img-2.jpg" alt=""></a>
            </div>
            <h3>Berry</h3>
            <p class="product-price"><span>Per Kg</span> 70$ </p>
            <a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center lemon">
          <div class="single-product-item">
            <div class="product-image">
              <a href="single-product.php"><img src="assets/img/products/product-img-3.jpg" alt=""></a>
            </div>
            <h3>Lemon</h3>
            <p class="product-price"><span>Per Kg</span> 35$ </p>
            <a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="single-product-item">
            <div class="product-image">
              <a href="single-product.php"><img src="assets/img/products/product-img-4.jpg" alt=""></a>
            </div>
            <h3>Avocado</h3>
            <p class="product-price"><span>Per Kg</span> 50$ </p>
            <a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="single-product-item">
            <div class="product-image">
              <a href="single-product.php"><img src="assets/img/products/product-img-5.jpg" alt=""></a>
            </div>
            <h3>Green Apple</h3>
            <p class="product-price"><span>Per Kg</span> 45$ </p>
            <a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center strawberry">
          <div class="single-product-item">
            <div class="product-image">
              <a href="single-product.php"><img src="assets/img/products/product-img-6.jpg" alt=""></a>
            </div>
            <h3>Strawberry</h3>
            <p class="product-price"><span>Per Kg</span> 80$ </p>
            <a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
          </div>
        </div> -->
      </div>

      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="pagination-wrap">
            <ul>
              <li><a href="#">Prev</a></li>
              <li><a href="#">1</a></li>
              <li><a class="active" href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end products -->

  <!-- logo carousel -->
  <div class="logo-carousel-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="logo-carousel-inner">
            <div class="single-logo-item">
              <img src="assets/img/company-logos/1.png" alt="">
            </div>
            <div class="single-logo-item">
              <img src="assets/img/company-logos/2.png" alt="">
            </div>
            <div class="single-logo-item">
              <img src="assets/img/company-logos/3.png" alt="">
            </div>
            <div class="single-logo-item">
              <img src="assets/img/company-logos/4.png" alt="">
            </div>
            <div class="single-logo-item">
              <img src="assets/img/company-logos/5.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end logo carousel -->

  <!-- footer -->
  <?php include("./inc/footer.php"); ?>


  <!-- script js -->
  <?php include("./inc/js.php") ?>

</body>

<!-- Mirrored from technext.github.io/fruitkha/shop.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Nov 2021 11:51:14 GMT -->

</html>