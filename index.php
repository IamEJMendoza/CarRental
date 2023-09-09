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
  .jumbotron {
    background-image: url('img/cover.jpg');
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    height: 970px;
  }

  .main {
    position: relative;
    top: 180px;
    text-align: center;
  }
  
  .main h1 {
    color: #333;
    font-family: 'Raleway', sans-serif;
    font-weight: 600;
    font-size: 70px;
    margin-top: 0;
    margin-bottom: 80px;
    text-transform: uppercase;
  }

  .btn-main {
    background-color: #000000;
    color: #fff;
    border-radius: 30px;
    font-family: 'Raleway', sans-serif;
    font-weight: 600;
    font-size: 18px;
    letter-spacing: 1.3px;
    padding: 16px 40px;
    text-decoration: none;
    text-transform: uppercase;
  }
  .btn-main:hover {
  background-color: #4CAF50; /* Green */
  color: white;
}

  .container {
    max-width: 940px;
    margin: 0 auto;
    padding: 0 10px;
  }

.lowerindex
{
	margin: auto;
	max-width: 90em;
}

img
{
	max-width: 100%;
}

.image-left, .image-right
{
	margin: 1em 0;
}

@media (min-width: 20em)
{
	.image-left, .image-right
	{
		display: flex;
		align-items: center;
	}

	.image-left img
	{
		margin-right: 1em;
		float: left; /* fallback */
	}

	.image-right img
	{
		order: 1;
		margin-left: 1em;
		float: right; /* fallback */
	}
	
	/* clearfix for fallback */
	.image-left::after,
	.image-right::after
	{
		content: "";
  	display: block;
		clear: both;
	}
}

@media (min-width: 30em)
{
	.image-left img, .image-right img
	{
		flex-shrink: 0;
	}
}

.gif{
  border-radius: 100px;
  height: 500px;
  border: solid 2px #000000;
}
.desc{
  font-size: 28px;
  text-align: justify;
}
.logo{
  height: 300px;
  width: 300px;
  margin: 0 auto;
  display: block;
  border-radius: 50%;
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
    <div class="jumbotron">
      <div class="container">
        <div class="main">
          <h1>Rent a car now!</h1>
            <a href="login.php" class="btn-main">Click here to start</a>
        </div>
      </div>
    </div>

<br><br>
<img src="img/logo.png" alt="logo" class="logo"/>
<br><br>
    <div class="lowerindex">
    <div class="image-left">
	<img src="img/carkeys.gif" alt="GIF" class="gif"/>
	<div>
		<p class="desc">Welcome to the world of car rentals, where convenience meets mobility! Car rental businesses provide a valuable service that allows individuals and organizations to temporarily access a wide range of vehicles for various purposes. Whether you're traveling for business or pleasure, in need of a compact car for city exploration or a spacious SUV for a family road trip, car rental companies offer a flexible solution to meet your transportation needs.</p>
	</div>
</div>

<div class="image-right">
	<img src="img/cardrive.gif" alt="GIF" class="gif"/>
	<div>
		<p class="desc">With options ranging from economy to luxury, and rental locations spanning across cities and airports, the car rental industry plays a crucial role in facilitating seamless travel experiences for people around the world. In this introduction, we'll delve into the key aspects of the car rental business, exploring its benefits, trends, and considerations for both customers and operators.</p>
	</div>
</div>
</div>
<br><br><br><br><br><br>
</body>
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="Back To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <h3>@Copyright <a href="#" data-toggle="tooltip" title="Car Rental">Car Rental</a> 2023</h3> 
</footer>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>
</html>