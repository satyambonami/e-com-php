<!DOCTYPE html>
<html lang="en">

<?php 
		$page_name = "404";
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
	
		<?php include("./inc/nav.php"); ?>


		<!-- breadcrumb-section -->
		<div class="breadcrumb-section breadcrumb-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 text-center">
						<div class="breadcrumb-text">
							<p>Fresh adn Organic</p>
							<h1>404 - Not Found</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end breadcrumb section -->
		<!-- error section -->
		<div class="full-height-section error-section">
			<div class="full-height-tablecell">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 offset-lg-2 text-center">
							<div class="error-text">
								<i class="far fa-sad-cry"></i>
								<h1>Oops! Not Found.</h1>
								<p>The page you requested for is not found.</p>
								<a href="index.php" class="boxed-btn">Back to Home</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end error section -->
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
		
		<?php include("./inc/footer.php"); ?>

<!-- script js -->
<?php include("./inc/js.php") ?>
	
	</body>

<!-- Mirrored from technext.github.io/fruitkha/404.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Nov 2021 11:51:12 GMT -->
</html>