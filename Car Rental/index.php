<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
    <title>Car Rental</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@600;700&family=Poppins:wght@500&display=swap');
  a {
    text-decoration: none;
}


#myVideo{
  width: 100%; 
  height: 100%;
  padding-top: 50px;
  z-index: -1;
}

.logo{
    position: absolute;
    top: 25%;
    left: 10%;
    height: 350px;
  width: 350px;
    border-radius: 50%;
}

.slogan{
    -webkit-text-stroke: 1px #ffffff;
  -webkit-text-fill-color: transparent;
  
  /* fallback */
  color: #ffffff;
  
  /* for demo purpose */
  font-family: Copperplate, "Copperplate Gothic Light", fantasy;
  font-weight: 900;
  font-size: 90px;
    position: absolute;
    top: 60%;
    left: 5%;
    text-align: center;
}

footer {
    height: 150px;
    background-color: #212121; /* For browsers that do not support gradients */
      color: #ffffff;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
  color:#FFFF66;
      text-decoration: none;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color:#ffffff;
  }
  </style>
<body id="myPage">
<?php include("navbar.php");?>
    <div class="video-container">
            <div class="color-overlay"></div>
            <video autoplay loop muted id="myVideo">
                <source src="../img/montage.mp4" type="video/mp4">
            </video>
</div>
        <br>
        <?php include("carsindex.php");?>
</body>

</html>