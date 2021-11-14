<?php include_once('inc/config.php'); ?>
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from bootstrap-ecommerce.com/bootstrap-ecommerce-html/page-user-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Nov 2021 11:31:26 GMT -->

<head>
	<?php include_once('inc/head.php'); ?>
</head>

<body>


	<?php include_once('inc/header.php'); ?>



	<!-- ========================= SECTION CONTENT ========================= -->
	<section class="section-content padding-y">

		<!-- ============================ COMPONENT REGISTER   ================================= -->
		<div class="card mx-auto" style="max-width:520px; margin-top:40px;">
			<article class="card-body">
				<header class="mb-4">
					<h4 class="card-title">Sign up</h4>
				</header>
				<?php
					if(isset($_POST['submit'])){
						$firstname = $_POST['first-name'];
						$lastname = $_POST['last-name'];
						$email = $_POST['email'];
						$gender = $_POST['gender'];
						$city = $_POST['city'];
						$country = $_POST['country'];
						$password = md5($_POST['password']);
						$db = mysqli_query($conn ,"INSERT INTO `user`(`first_name`, `last_name`, `email`, `gender`, `city`, `country`, `password`) VALUES ('$firstname','$lastname','$email','$gender','$city','$country','$password')");
						if($db ==  true){
							header("location: user-dashboard.php");
	
						}
						else{
							echo 'NT';
	
						}
						die();
					}
				
				?>
				<form method="POST">
					<div class="form-row">
						<div class="col form-group">
							<label>First name</label>
							<input type="text" name="first-name" class="form-control" placeholder="">
						</div> <!-- form-group end.// -->
						<div class="col form-group">
							<label>Last name</label>
							<input type="text" name="last-name" class="form-control" placeholder="">
						</div> <!-- form-group end.// -->
					</div> <!-- form-row end.// -->
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" placeholder="">
						<small class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div> <!-- form-group end.// -->
					<div class="form-group">
						<label class="custom-control custom-radio custom-control-inline">
							<input class="custom-control-input" checked="" type="radio" name="gender" value="option1">
							<span class="custom-control-label"> Male </span>
						</label>
						<label class="custom-control custom-radio custom-control-inline">
							<input class="custom-control-input" type="radio" name="gender" value="option2">
							<span class="custom-control-label"> Female </span>
						</label>
					</div> <!-- form-group end.// -->
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>City</label>
							<input type="text" name="city" class="form-control">
						</div> <!-- form-group end.// -->
						<div class="form-group col-md-6">
							<label>Country</label>
							<select id="inputState" class="form-control" name="country">
								<option> Choose...</option>
								<option>Uzbekistan</option>
								<option>Russia</option>
								<option selected="">United States</option>
								<option>India</option>
								<option>Afganistan</option>
							</select>
						</div> <!-- form-group end.// -->
					</div> <!-- form-row.// -->
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>Create password</label>
							<input class="form-control"  name="password" type="password">
						</div> <!-- form-group end.// -->
						<div class="form-group col-md-6">
							<label>Repeat password</label>
							<input class="form-control"	name="password" type="password">
						</div> <!-- form-group end.// -->
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary btn-block"> Register </button>
					</div> <!-- form-group// -->
					<div class="form-group">
						<label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked="">
							<div class="custom-control-label"> I am agree with <a href="#">terms and contitions</a> </div>
						</label>
					</div> <!-- form-group end.// -->
				</form>
			</article><!-- card-body.// -->
		</div> <!-- card .// -->
		<p class="text-center mt-4">Have an account? <a href="#">Log In</a></p>
		<br><br>
		<!-- ============================ COMPONENT REGISTER  END.// ================================= -->


	</section>
	<!-- ========================= SECTION CONTENT END// ========================= -->


	<?php include_once('inc/footer.php'); ?>


</body>

</html>