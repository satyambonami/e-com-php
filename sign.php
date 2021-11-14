<?php
    include("./inc/conn.php");

    if(isset($_POST['signin'])){
        $name = mysqli_real_escape_string($conn , $_POST['uname']);
        $email = mysqli_real_escape_string($conn , $_POST['email']);
        $pass = mysqli_real_escape_string($conn , $_POST['pass']);
        $number = mysqli_real_escape_string($conn , $_POST['mobile']);
        // $hashed = hash('sha512', $pass);
        $hashed=hash('sha512',$pass.HASH_KEY);

        $check = "select * from eccom_user where email = '$email'";
        $check_q = mysqli_query($conn , $check);
        $check_query = mysqli_num_rows($check_q);
        if($check_query == 0){
            $res = mysqli_query($conn , "insert into eccom_user (uname,email,mobile, pass,status) values('$name','$email','$number','$hashed','0')");
            if($res){
                // echo "insert sucess";
                $_SESSION['email']="$email";
                header('location: index.php');
                exit();
            }else{
                echo "failed";
            }
        }else{
            echo "Email already exists";
        }
    }

// login code 
        if(isset($_POST['login'])){
            $email = mysqli_real_escape_string($conn , $_POST['email']);
            $pass = mysqli_real_escape_string($conn , $_POST['pass']);
            // $hashed = hash('sha512', $pass);
            $hashed=hash('sha512',$pass.HASH_KEY);
            // $db = mysqli_query($conn, "SELECT * FROM `eccom_user` WHERE `email` = '$email' AND `pass` = '$hashed'");
            // if($db == true){
            //     header('location: index.php');
            //     exit();
            // }
            // else{

            //     echo "NT BRO";
            // }
            


                $ress=mysqli_query($conn,"SELECT * FROM `eccom_user` WHERE `email`='$email' AND `pass`='$hashed'");
                if($ress == true){
                    $_SESSION['user']['email']=$email;
                    $_SESSION['user']['pass']=$pass;
                    // echo 'GG';
                    header('location:index.php');
                    exit();
                }else{
                    echo "wrong password ";
                }
            
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
    crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/sign.css">
</head>
<body>


<div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="" method="POST">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" name="uname" />
                <input type="email" placeholder="Email" name="email" />
                <input type="number" placeholder="Mobile" name="mobile" />
                <input type="password" placeholder="Password" name="pass" />
                <button type="sbmit" name="signin">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form method="POST">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" placeholder="Email" name="email" />
                <input type="password" placeholder="Password" name="pass" />
                <a href="#">Forgot your password?</a>
                <button type="submit" name="login">Log In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

<div class="footer">
<b>	Follow me on </b>
	<div class="icons">
		<a href="https://github.com/kvaibhav01" target="_blank" class="social"><i class="fab fa-github"></i></a>
		<a href="https://www.instagram.com/vaibhavkhulbe143/" target="_blank" class="social"><i class="fab fa-instagram"></i></a>
		<a href="https://medium.com/@vaibhavkhulbe" target="_blank" class="social"><i class="fab fa-medium"></i></a>
		<a href="https://twitter.com/vaibhav_khulbe" target="_blank" class="social"><i class="fab fa-twitter-square"></i></a>
		<a href="https://linkedin.com/in/vaibhav-khulbe/" target="_blank" class="social"><i class="fab fa-linkedin"></i></a>
		</div>
	</div>

  <script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () =>
container.classList.add('right-panel-active'));

signInButton.addEventListener('click', () =>
container.classList.remove('right-panel-active'));
  </script>
</body>
</html>