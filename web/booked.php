<?php
include 'connection.php';
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

        <div class="container">
  <?php
  $flag=1;
  $id=$_SESSION['id'];
$booked_query1="SELECT loc_from, loc_to, book_date, book_time, book_id FROM book WHERE (cus_id ='$id')";
      $result1=mysqli_query($con,$booked_query1);
      if(!$result1){echo "select failed: $result1<br>".$con->error;}
      else{
        $row1=mysqli_fetch_row($result1);
        if(!$row1)
        {
          $flag=0;?>
        <h2>No Bookings </h2><p><a href="home.php">Book a cab</a></p> 
        <?php
      }
        else
        {$flag=1;}  

      }

if($flag==1){

    $booked_query="SELECT loc_from, loc_to, book_date, book_time, book_id FROM book WHERE (cus_id ='$id')";
      $result=mysqli_query($con,$booked_query);
      if(!$result){echo "select failed: $result<br>".$con->error;}


  else{?>    <div class="container">
            <h2>Your Bookings</h2>
            <?php
   while($row=mysqli_fetch_row($result))
          { 
            ?>
            
            <?php
              $bid=$row[4];
            ?>
            <div class="book-row">
            <div class="booked-list col-sm-8">
            <div class="col-sm-2"><?php echo $row[0]?></div>
            <div class="col-sm-3"><?php echo $row[1]?></div>
            <div class="col-sm-5"><?php echo $row[2]?></div>
            <div class="col-sm-2"><?php echo $row[3]?></div>
            </div>
            <div class="cancel col-sm-4">
            <input class="btn btn-danger" type="button" id="cancel" value="Cancel"/>
            </div>
            </div>
            <?php
        
      }
    }
    }
    else{}
  ?>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("#cancel").click(function(){
        $.ajax({
            url: "update.php",
            type: "POST",
            data: {book_id:<?php echo $bid;?> }, //this sends the user-id to php as a post variable, in php it can be accessed as $_POST['uid']
            success: function(data){
              if(data==data){
                location.reload(true);
              }
            }
        });
    });
});
</script>

</body>
</html>

