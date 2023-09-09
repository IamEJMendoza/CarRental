<?php

session_start();

    if (isset($_POST['submit'])) {

        $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];   
    $contact_no = ($_POST['contact_no']);
    $address = $_POST['address'];
    $password = $_POST['password'];
    $password_len=strlen($password);
     $d_date = date("y/m/d h:i:s") ;
      $_POST[".$d_date."]; 

	$db = mysqli_connect("localhost", "root", "", "car_rental_db");

  $duplicate_user_query="select email from user where email='$email'";
  $duplicate_user_result=mysqli_query($db,$duplicate_user_query) or die(mysqli_error($db));
  $rows_fetched=mysqli_num_rows($duplicate_user_result);
  if($rows_fetched>0){
      //duplicate registration
      //header('location: signup.php');
      echo '<script>alert("The email is already used!")</script>';
      echo "<script> window.location='userregistration.php' </script> ";
  }
            else{

                $sql = $db->prepare("INSERT INTO user(f_name,l_name,email,contact_no,address,password,date) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $sql->execute([$f_name,$l_name,$email,$contact_no,$address,$password,$d_date]);
        
                    
                            $run= $success_msg="Thank You For Registration";
                      echo '<script>alert("Account Created Successfully")</script>';
                    echo "<script> window.location='login.php' </script> ";
                        }
                
                }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" href="pic/logos.png" />
<head><title>Car Rental-Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css”>
<title>Registration</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  background: #ffffff;
  font-family: "Open Sans", sans-serif;
  min-height: 90vh;
}
img {
  width: 100%;
  height: 850px;
  border-bottom-left-radius: 10px;
  border-top-left-radius: 10px;
  display: block;
}
a {
  margin-left: 30px;
  color: #3c63cc;
  font-weight: 600;
}
a:hover {
  margin-left: 30px;
  color: #2fa1fd;
}
.modernForm {
  max-width: 1200px;
  display: flex;
  margin: 100px auto;
  background-color: #fff;
  border-radius: 10px;
}
.imageSection {
  flex-basis: 50%;
  position: relative;
  color: white;
}
.overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: rgba(96, 30, 150, 0.507);
  border-bottom-left-radius: 10px;
  border-top-left-radius: 10px;
  z-index: 0;
}
.textInside,
.service {
  position: absolute;
}
.textInside {
  bottom: 200px;
  right: 120px;
}
.tagLine {
  font-size: 1.4rem;
  font-weight: 600;
}
.price {
  font-size: 2rem;
  font-weight: 700;
}
.service {
  bottom: 30px;
  right: 50px;
}
.service p {
  font-weight: 700;
}
.contactForm {
  flex-basis: 45%;
  margin: auto;
  color: #555;
  padding-left: 30px;
  border: solid 2px #000000;
  border-radius: 30px;
}
.contactForm h1 {
  padding: 15px 0;
}
input[type="email"],
input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: rgb(177, 177, 177) 1px solid;
  margin-top: 10px;
}
.name {
  position: relative;
  margin-bottom: 20px;
}
.iconName {
  position: absolute;
  right: 10px;
  bottom: 10px;
}

input[type="checkbox"] {
  margin-right: 10px;
}
input[type="submit"] {
  background-color: #3c63cc;
  font-size: 1rem;
  border: none;
  color: white;
  padding: 10px 50px;
  border-radius: 5px;
  text-decoration: none;
  margin: 30px 0;
  cursor: pointer;
  float: left;
}
input[type="submit"]:hover {
  background-color: #2fa1fd;
}

@media only screen and (max-width: 768px) {
  .modernForm {
    flex-wrap: wrap;
  }
  .imageSection,
  .contactForm {
    flex-basis: 100%;
  }
  .overlay,
  img {
    border-bottom-left-radius: 0;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }
  .contactForm {
    padding-right: 30px;
  }
}

        </style>
  <body>
    <div class="modernForm">
      <div class="imageSection">
        <div class="image">
          <img src="img/register.gif" alt="pexels-yuri-manei-2272854">
        </div>
      </div>
      <div class="contactForm">
        <h1>Registaration Form</h1>
        <form method="POST" action="" enctype="multipart/form-data">
          <div class="name">
            <label for="f_name">First Name:</label>
            <input type="text" name="f_name" id="f_name" required/>
          </div>

          <div class="name">
            <label for="l_name">Last Name:</label>
            <input type="text" name="l_name" id="l_name" required/>
          </div>

          <div class="name">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required />
          </div>

          <div class="name">
            <label for="contact_no">Contact No.:</label>
            <input type="text" name="contact_no" id="contact_no" pattern="[0-9]{11}" required />
          </div>

          <div class="name">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required />
          </div>

          <div class="name">
            <label for="Password">Password:</label>
            <input type="password" name="password" id="password" required />
          </div>

          <input type="submit" class="btn btn-success text-uppercase focus" name="submit"  value="Register">
        </form>
      </div>
    </div>
  </body>


</html>