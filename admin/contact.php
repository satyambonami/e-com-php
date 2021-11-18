<?php 
    $page_name="Page Name";
    include("../inc/conn.php");

    
    
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
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Subject</th>
                          <th>Message</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php 
                      $sql = "SELECT * from `contact`";
                      $query = mysqli_query($conn , $sql);
                      while($data = mysqli_fetch_assoc($query)){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $data['id'] ?></td>
                          <td><?php echo $data['name'] ?></td>
                          <td><?php echo $data['email'] ?></td>
                          <td><?php echo $data['phone'] ?></td>
                          <td><?php echo $data['subject'] ?></td>
                          <td><?php echo $data['message'] ?></td>
                          <td><?php echo $data['date'] ?></td>
                          <?php 
                            $status= $data['status'];
                            if($status>1){
                          ?>
                          <td>Replied</td>
                          <?php }else{ ?>
                          <td>Reply Status</td>
                          <?php } ?>
                          <td>
                            <a href="reply-mail.php?id=id" class="btn btn-primary" data-toggle="tooltip"
                              data-placement="top" data-original-title="Reply">
                              <i class="mdi mdi-reply"></i>
                            </a>
                            <a href="#" class="btn btn-danger delete-row" data-toggle="tooltip" data-placement="top"
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
                          <th>Name</th>
                          <th>Email</th>
                          <th>Message</th>
                          <th>Date</th>
                          <th>Status</th>
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