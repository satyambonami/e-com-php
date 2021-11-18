<!DOCTYPE html>
<html lang="en">

<?php 
		include("./inc/conn.php");
		$page_name = "contact";
		include("./inc/head.php"); 
		
		if(isset($_POST['contact'])){
			$name = mysqli_real_escape_string($conn , $_POST['name']);
			$email = mysqli_real_escape_string($conn , $_POST['email']);
			$phone = mysqli_real_escape_string($conn , $_POST['phone']);
			$subject = mysqli_real_escape_string($conn , $_POST['subject']);
			$message = mysqli_real_escape_string($conn , $_POST['message']);

			$sql = "insert into contact(name,email,phone,subject,message) values('$name','$email','$phone','$subject','$message')";
			$res = mysqli_query($conn , $sql);
			if($res == true){
					echo "<script>alert('ok');</script>";

			}else{
					echo "<script>alert('failed');</script>";
			}
			
	}

	?>

<body>

  <!--PreLoader-->
  <div class="loader">
    <div class="loader-inner">
      <div class="circle"></div>
    </div>
  </div>
  <!--PreLoader Ends-->

  <?php include("./inc/nav.php"); ?>


  <!-- breadcrumb-section -->
  <div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="breadcrumb-text">
            <p>Get 24/7 Support</p>
            <h1>Contact us</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end breadcrumb section -->

  <!-- contact form -->
  <div class="contact-from-section mt-150 mb-150">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0">
          <div class="form-title">
            <h2>Have you any question?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est, assumenda.
              Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse natus!</p>
          </div>
          <div id="form_status"></div>
          <div class="contact-form">
            <form method="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
              <p>
                <input type="text" placeholder="Name" name="name" id="name">
                <input type="email" placeholder="Email" name="email" id="email">
              </p>
              <p>
                <input type="tel" placeholder="Phone" name="phone" id="phone">
                <input type="text" placeholder="Subject" name="subject" id="subject">
              </p>
              <p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
              <input type="hidden" name="token" value="FsWga4&@f6aw" />
              <p><input type="submit" value="Submit" name="contact"></p>
            </form>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-form-wrap">
            <div class="contact-form-box">
              <h4><i class="fas fa-map"></i> Shop Address</h4>
              <p><?php echo $_SESSION['general']['address'] ?></p>
            </div>
            <div class="contact-form-box">
              <h4><i class="far fa-clock"></i> Shop Hours</h4>
              <p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
            </div>
            <div class="contact-form-box">
              <h4><i class="fas fa-address-book"></i> Contact</h4>
              <p>+91 <?php echo $_SESSION['general']['contact'] ?> <br> Email:
                <?php echo $_SESSION['general']['email'] ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end contact form -->

  <!-- find our location -->
  <div class="find-location blue-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
        </div>
      </div>
    </div>
  </div>
  <!-- end find our location -->

  <!-- google map section -->
  <div class="embed-responsive embed-responsive-21by9">
    <iframe src="<?php echo $_SESSION['general']['map_url'] ?>" width="600" height="450" frameborder="0"
      style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
  </div>
  <!-- end google map section -->


  <?php include("./inc/footer.php"); ?>

  <!-- script js -->
  <?php include("./inc/js.php") ?>

</body>

<!-- Mirrored from technext.github.io/fruitkha/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Nov 2021 11:51:12 GMT -->

</html>