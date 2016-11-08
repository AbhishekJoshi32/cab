<?php
require_once('auth.php');

?>

<!doctype html>
<html>
<head>
	    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="slick/slick.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery-2.1.4.min.js"></script>
  	<script src="slick/slick.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Cab-Management-System</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="booked.php">Manage Booking</a></li>
        <li class="login"><?php echo "hello ".$_SESSION['user']; ?></button>
        
        </li>
        <li><a href="signout.php">Logout</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron">
  <div class="slide">
<div><img src="images/slide_1.jpg"></div>
<div><img src="images/slide_1.jpg"></div>
<div><img src="images/slide_1.jpg"></div>
<div><img src="images/slide_1.jpg"></div>
</div>

  <div class="container book">
    <ul class="nav nav-tabs">
    <li role="presentation" class="active"><a href="#">Outstation</a></li>
    <li role="presentation"><a href="#">Local</a></li>
    <li role="presentation"><a href="#">Airport</a></li>
    </ul>
    <form action="book.php" method="post">
        <div class="col-md-6">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">From</span>
            <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="from">
          </div>
        </div>
        <div class="col-md-6">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon2">To</span>
            <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2" name="to">
          </div>
        </div>
        <div class="col-md-4">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">Date </span>
            <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon3" min="2000-01-02" max="2016-12-31" name="date" id="date">
          </div>
        </div>
        <div class="col-md-4">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon4">Time</span>
            <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon4" name="time">
          </div>
        </div>
        <br>
        <div class="col-md-6">
          <div class="input-group type">
            <span class="input-group-addon" id="basic-addon5">Type</span>
            <select class="selectpicker" name="car-type">
              <option>Economy</option>
              <option>SUV</option>
              <option>Luxury</option>
            </select>

          </div>
        </div>
        <div class="col-md-12">
          <div class="submit ">
            <input type="submit" name="submit" value="submit">
          </div>
        </div>
      </form>
  </div>
 


  
</div>
<div class="why">
  <div class="container">
    <h1>Why Choose Us</h1>
      <div class="row">
        <div class="col-md-3">
          <div class="why-box">
           <h3>Verified Drivers</h3>
            <p>Ride safely with verified and professionally trained drivers</p>
          <a href="#">Know More</a>
        </div>  
        </div>
        <div class="col-md-3">
          <div class="why-box">
         <h3>Maintianed Cabs</h3>
          <p>Our cars are in perfect condition so that your trip goes on in ease.</p>
          <a href="#">Know More</a>
        </div>
        </div>
        <div class="col-md-3">
          <div class="why-box">
            <h3>24x7 Assistance</h3>
              <p>Got a query? We are always available at +91-9910994229</p>
              <a href="#">Know More</a>
                    
        </div>  
        </div>
        <div class="col-md-3">
          <div class="why-box">
          <h3>Pocket Friendly</h3>
            <p>Most economical prices</p>
            <a href="#">Know More</a>
          </div>
        </div>
      </div>
  </div>
</div>


<div class="parallax">
<div class="para-cont">
<h1>Give us a chance to serve you!!</h1>
<h2>
Call Us-<span>9790716028</span>
</h2>
</div>
</div>

<div class="contact">
<div class="contact-us">
  <div class="container">
  <h1>Contact</h1>
  <div class="row">
  <div class=" col-md-6">
  <div class="form">
    <div class="input-group">
    <input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1">
  </div>
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
  </div>
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Mobile" aria-describedby="basic-addon1">
  </div>
  <div class="input-group">
    <textarea type="text" class="form-control" placeholder="Message" aria-describedby="basic-addon1"></textarea>
  </div>
  <div class="submit">
  <button type="button" class="btn btn-default btn-lg">Submit</button>
  </div>
  </div>
  </div>
  <div class="call col-md-6">
    <div><h3>Get in touch</h3>
        <p>Call us 24*7</p>
        <span>9790716028</span>
    </div>
    <div class="addr">
      <h3>Cab-Service</h3>
      <p>VIT UNIVERSITY Chennai, Tamil Nadu India</p>
    </div>
  </div>
  </div>
</div>	
</div>
</div>
<footer>
  <div class="container">
    <p>
    <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span>
    All Rights Reserved ADev
    </p>
  </div>

</footer>
</body>
</html>


