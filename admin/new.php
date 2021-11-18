<?php
$page_name = "Add Product";
$icon = "far fa-envelope";
include("../inc/conn.php");


if (isset($_POST['productsub'])){
  $pname = mysqli_real_escape_string($conn, $_POST['product_name']);
  $prate = mysqli_real_escape_string($conn, $_POST['product_rate']);
  $pquatity = mysqli_real_escape_string($conn, $_POST['product_quantity']);
  $pshortdesc= mysqli_real_escape_string($conn, $_POST['product_short_desc']);
  $pcategory= mysqli_real_escape_string($conn, $_POST['product_category']);
  
  $pimg = $_FILES["product_image"]["name"];
  $tempname= $_FILES["product_image"]["tmp_name"];
  $folder = "assets/img/products/" . $pimg;

  if(isset($_GET['edit'])){
    $id = mysqli_real_escape_string($conn,$_GET['edit']);
    $query = "UPDATE `product` SET `productname` = '$pname' WHERE `id` = '$id'";
  }else{
    $query = "INSERT INTO `product`( `productname`, `rateperkillo`, `productquantity`, `shordesc`, `category`, `img`) VALUES ('$pname','$prate','$pquatity','$pshortdesc','$pcategory','$pimg')";
  }
  
  $proDb = mysqli_query($conn, $query);
  if($proDb == true){
    if (move_uploaded_file($tempname, $folder) == true) {
      echo "image upload <br>";
    } else {
      echo 'image not upload';
    }
  } else {
    echo "insert product failed";
  }
  die();
}

if(isset($_GET['edit'])){
  $id = mysqli_real_escape_string($conn,$_GET['edit']);
  $query = mysqli_query($conn,"SELECT * FROM `product` WHERE `id` = '$id' ");
  $data = mysqli_fetch_assoc($query);
}


?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <?php include_once('inc/css.php'); ?>
  <title><?php echo $page_name ?></title>
  <!-- add product code  -->

  <style>
  .select2 {
    width: 100% !important;
  }

  .select2-search {
    display: none;
  }
  </style>
</head>

<body class="sidebar-pinned ">
  <?php include_once('inc/sidebar.php'); ?>
  <main class="admin-main">
    <?php include_once('inc/nav.php'); ?>
    <section class="admin-content ">
      <?php include_once("inc/breadcrum.php"); ?>
      <section class="pull-up">
        <div class="container">
          <div class="row ">
            <div class="col-lg-12 mx-auto mt-2">
              <div class="card py-3 m-b-30">
                <div class="card-body">
                  <form method="POST" enctype="multipart/form-data">

                    <label for="product_name" class="form-label">Porduct Name</label>
                    <input type="text" class="form-control mb-3" name="product_name" placeholder="Product Name"
                      value="<?php if(isset($_GET['edit'])){echo $data['productname'];}?>">

                    <label for="rate" class="form-label">Rate per Killogram </label>
                    <input type="number" class="form-control mb-3" name="product_rate" placeholder="Rate per killogram"
                      value="<?php if(isset($data)){echo $data['rateperkillo'];}?>">

                    <label for="quantity" class="form-label">Product Quantity</label>
                    <input type="number" class="form-control mb-3" name="product_quantity" placeholder="Quantity">

                    <label for="short_desc" class="form-label">Product short Description</label>
                    <input type="text" class="form-control mb-3" name="product_short_desc"
                      placeholder="Short Description">

                    <label for="category" class="form-label">Product Category</label>
                    <input type="text" class="form-control mb-3" name="product_category" placeholder="Category">

                    <label for="productimage" class="form-label">Upload a product image</label>
                    <input type="file" class="form-control mb-3" id="exampleInputEmail1" aria-describedby="emailHelp"
                      placeholder="Upload product image" name="product_image" autocomplete="off">

                    <input type="submit" name="productsub" style="float:right;">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
  </main>

  <?php include_once('inc/js.php'); ?>

</body>

</html>