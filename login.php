<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental-Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
session_start();
include("connection.php");

if(isset($_POST['submit'])){

$id=$_POST['id'];
$password=$_POST['password'];
$email=$_POST['email'];
if(empty($email) || empty ($password))
{
$error_msg="filled all the requirements";
}

else

{
    $u_query="select* from user where email='$email' AND password='$password'";
	$check=mysqli_query($db,$u_query);
	
	if(mysqli_num_rows($check)>0)
	/*if($_POST['id']=='$id' && $_POST['pswd']=='$pswd')*/
	
	{
	$check_row= mysqli_fetch_assoc($check);
	$_SESSION['email']=$check_row['email'];
	echo "<script> window.location='Car Rental/index.php' </script> ";
	}
  else
	{
	$invalid_msg="";
      echo '<script>alert("Email or Password is incorrect!")</script>';
	}
}
}
?>
<style>
	*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('img/loginbg.jpg') no-repeat;
    background-size: cover;
    background-position: center;
}
.wrapper{
    width: 420px;
    background: transparent;
    border:2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    color: #fff;
    border-radius: 10px;
    padding: 30px 40px;
}
.wrapper h1{
    font-size: 36px;
    text-align: center;
}
.wrapper .input-box{
    width: 100%;
    height: 60px;
    position: relative;
    margin-top: 20px;
}
.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    color: #fff;
    padding: 20px 40px 20px 20px;
}
.input-box input::placeholder{
    color: #fff;

}
.wrapper .remember-forgot{
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: 15px 5px 15px;
}
.remember-forgot label input{
accent-color: #fff;
margin-right: 3px;
}
.remember-forgot a {
    color: #fff;
    text-decoration: none;
}
.remember-forgot a:hover{
    text-decoration: none;
    color: black;
}
.wrapper .btn{
    width: 100%;
    height: 45px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    color: #333;
    font-weight: 700;
}
.wrapper .register-link{
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;

}
.register-link p a{
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}
.register-link p a:hover{
    text-decoration: none;
    color: black;
}
	</style>
<body>
    <div class="wrapper">
        <form class="modal-content animate" action="login.php" method="post">
            <h1>Login </h1>
            <div class="input-box">
                <input type="text" placeholder="Enter your email" name="email" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Enter your password" name="password" required>
            </div>
            <div class="remember-forgot">
                <label>
                    <input type="checkbox">Remember me
                </label>
                <a href="#">Forgot password?</a>
            </div>
            <button type ="submit" name="submit" value="login" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account?<a href="userregistration.php"> Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>