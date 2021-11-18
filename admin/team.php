<?php
require('../inc/conn.php');
$page_name="Site Detials";


if(isset($_POST['submit'])){
    $teamname =mysqli_real_escape_string($conn, $_POST['teamname']);
    $teamoccupation =mysqli_real_escape_string($conn, $_POST['teamoccupation']);
    $teamfacebook =mysqli_real_escape_string($conn, $_POST['teamfacebook']);
    $teaminstagram =mysqli_real_escape_string($conn, $_POST['teaminstagram']);
    $teamtwitter =mysqli_real_escape_string($conn, $_POST['teamtwitter']);


    $teamimage = $_FILES["teamimage"]["name"];
    $tempname = $_FILES["teamimage"]["tmp_name"];    
    $folder = "assets/team/".$teamimage;

    $query = mysqli_query($conn , "INSERT INTO `team` (`teamimage`,`teamname`,`teamoccupation`,`teamfacebook`,`teaminstagram`, `teamtwitter`) VALUES('$teamimage','$teamname','$teamoccupation','$teamfacebook','$teaminstagram','$teamtwitter')");
    
    if(move_uploaded_file($tempname , $folder)==true){
      echo "image upload <br>";
    }else{
      echo 'image not upload';
    }  

}
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <?php include_once('inc/css.php');?>
  <title>Test</title>
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
  <?php include_once('inc/sidebar.php');?>
  <main class="admin-main">
    <?php include_once('inc/nav.php');?>
    <section class="admin-content ">
      <?php include_once("inc/breadcrum.php");?>
      <section class="pull-up">
        <div class="container">
          <div class="row ">
            <div class="col-lg-12 mx-auto mt-2">
              <div class="card py-3 m-b-30">
                <div class="card-body">
                  <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Team Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="" name="teamname" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Occupation</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="" name="teamoccupation" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Facebook Url</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Contact Details" name="teamfacebook" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Insta url</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Address" name="teaminstagram" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">twitter</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Facebook" name="teamtwitter" required autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">logo</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Upload team image" name="teamimage" required autocomplete="off">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
  </main>

  <?php include_once('inc/js.php');?>
</body>

</html>