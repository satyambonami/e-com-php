<?php
require('../inc/conn.php');
$page_name="Site Detials";


if(isset($_POST['submit'])){
    $sname =mysqli_real_escape_string($conn, $_POST['siteName']);
    $email =mysqli_real_escape_string($conn, $_POST['email']);
    $contact =mysqli_real_escape_string($conn, $_POST['contact']);
    $address =mysqli_real_escape_string($conn, $_POST['address']);
    $facebook =mysqli_real_escape_string($conn, $_POST['facebook']);
    $linkedin =mysqli_real_escape_string($conn, $_POST['linkedin']);
    $instagram =mysqli_real_escape_string($conn, $_POST['instagram']);
    $map_url =mysqli_real_escape_string($conn, $_POST['map']);
    $footer_about =mysqli_real_escape_string($conn, $_POST['footer_about']);
    $bannersubtext =mysqli_real_escape_string($conn, $_POST['bannersubtext']);
    $bannermaintext =mysqli_real_escape_string($conn, $_POST['bannermaintext']);


    $image = $_FILES['file']['tmp_name'];
    if(file_exists($image)){
        $file_name = $_FILES['file']['name'];
        // pathinfo filenname 
        $ext = pathinfo($file_name , PATHINFO_EXTENSION);
        if(move_uploaded_file($image , $file_name)==true)
        {
            mysqli_query($conn,"UPDATE `pro_general` SET `key_value`= '$image' WHERE `key_name`= 'logo'" );
        }
        else{
            echo 'nahi huwa';
        }

    }


    $query = "";
    $data = array('site_name'=>$sname , 'email'=>$email  , 'contact'=>$contact  , 'address'=>$address  , 'facebook'=>$facebook  , 'linkedin'=>$linkedin  , 'instagram'=>$instagram  , 'map_url'=>$map_url  , 'footer_about'=>$footer_about  , 'bannersubtext'=>$bannersubtext  , 'bannermaintext'=>$bannermaintext);
    
    
    foreach($data as $key_name => $key_value) {
        $query .= "UPDATE `pro_general` SET `key_value`= '$key_value' WHERE `key_name`= '$key_name';";
    }
    $res = mysqli_multi_query($conn , $query);
    if($res){
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
                      <label for="exampleInputEmail1">Site Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Site Name" name="siteName" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Site Email" name="email" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Contact</label>
                      <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Contact Details" name="contact" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Address</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Address" name="address" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Facebook</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Facebook" name="facebook" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Linkedin</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Site Name" name="linkedin" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Instagram</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Site Name" name="instagram" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Map</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Site Name" name="map" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">logo</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Site Name" name="file" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Footer About</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Site Name" name="footer_about" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Banner Text</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Site Name" name="bannersubtext" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Banner Main Text</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Site Name" name="bannermaintext" required autocomplete="off">
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