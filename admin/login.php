<?php 
    $page_name="Login";
    include_once("../inc/conn.php");
    // Sign In
    if(isset($_POST['adminlogin'])){
        $email= strtolower(mysqli_real_escape_string($conn,$_POST['email']));
        $pass=mysqli_real_escape_string($conn,$_POST['password']);
        $password=hash('sha512',$pass.HASH_KEY);
        $checkAdmin=mysqli_query($conn,"SELECT * FROM `eccom_user` WHERE `email`='$email' AND `pass`='$password' AND status>0");
        if(mysqli_num_rows($checkAdmin)>0){
                header("location:index.php");
        }else{
            echo 'Something went wrong, Please try again.';
        }
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <?php include_once('inc/css.php');?>
    <title><?php echo $page_name ." | ". SITE_NAME?></title>
</head>
<body class="sidebar-pinned ">
    <main class="admin-main p-0">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-4  bg-white">
                    <div class="row align-items-center m-h-100">
                        <div class="mx-auto col-md-8">
                            <div class="p-b-20 text-center">
                                <p>
                                    <img src="assets/img/logo.svg" width="80" alt="">
                                </p>
                                <p class="admin-brand-content">
                                    Admin  Panel
                                </p>
                            </div>
                            <h3 class="text-center p-b-20 fw-400">Login</h3>
                            <form class="needs-validation" method="POST">
                                <div class="form-row">
                                    <div class="form-group floating-label col-md-12">
                                        <label>Email</label>
                                        <input type="email" required class="form-control" placeholder="Email" autocomplete="off" name="email">
                                    </div>
                                    <div class="form-group floating-label col-md-12">
                                        <label>Password</label>
                                        <input type="password" required class="form-control"  autocomplete="off" placeholder="Password" name="pass">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block btn-lg" name="adminlogin">Login</button>
                            </form>
                            <p class="text-right p-t-10">
                                <a href="#!" class="text-underline">Forgot Password?</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-md-block bg-cover" style="background-image: url('assets/img/login.svg');">
                </div>
            </div>
        </div>
    </main>
</body>
    <?php include_once('inc/js.php');?>
</html>