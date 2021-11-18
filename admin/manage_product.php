<?php 
  $page_name="Manage Product";
  include("../inc/conn.php");

  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM `addproduct` WHERE id = $id";
    $res = mysqli_query($conn , $sql);
    if($res==true){
      echo "ok";
    }else{
      echo "failed";
    }
  }

    
    
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <?php include_once('inc/css.php');?>
  <title><?php echo $page_name ." | ". "Admin"?></title>
</head>

<body class="sidebar-pinned ">
  <?php include_once('inc/sidebar.php');?>
  <main class="admin-main">
    <?php include_once('inc/nav.php');?>
    <section class="admin-content ">
      <?php include_once("inc/breadcrum.php");?>
      <section class="pull-up">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-11 mx-auto mt-2">
              <div class="card py-3 m-b-30">
                <div class="card-body">
                  <div class="table-responsive p-t-10">
                    <table id="example" class="table" style="width:100%">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>product_name</th>
                          <th>product_rate</th>
                          <th>product_quantity</th>
                          <th>product_short_desc</th>
                          <th>product_category</th>
                          <th>product_image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php 
                      $sql = "SELECT * from `addproduct`";
                      $query = mysqli_query($conn , $sql);
                      while($data = mysqli_fetch_assoc($query)){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $data['id'] ?></td>
                          <td><?php echo $data['product_name'] ?></td>
                          <td><?php echo $data['product_rate'] ?></td>
                          <td><?php echo $data['product_quantity'] ?></td>
                          <td><?php echo $data['product_short_desc'] ?></td>
                          <td><?php echo $data['product_category'] ?></td>
                          <td><img src="./assets/product_image/<?php echo $data['product_image'] ?>" alt=""
                              style="width: 100px; height:50px"></td>

                          <td>
                            <a href="addproduct.php?edit=<?php echo $data['id']?>" class="btn btn-primary"
                              data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                              <i class="mdi mdi-reply"></i>
                            </a>
                            <a href="manage_product.php?delete=<?php echo $data['id']?>"
                              class="btn btn-danger delete-row" data-toggle="tooltip" data-placement="top"
                              data-original-title="Delete">
                              <i class="mdi mdi-trash-can"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                      <?php } ?>
                      <tfoot>
                        <tr>
                          <th>Id</th>
                          <th>product_name</th>
                          <th>product_rate</th>
                          <th>product_quantity</th>
                          <th>product_short_desc</th>
                          <th>product_category</th>
                          <th>product_image</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
  </main>
</body>
<?php include_once('inc/js.php');?>

</html>