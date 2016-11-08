<?php
require_once('auth.php');
include 'connection.php';
$id=$_SESSION['id'];


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

<?php



if(isset($_POST['submit'])){
	$from_loc=$_POST['from'];  
	$to_loc=$_POST['to'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$type=$_POST['car-type'];
	$_SESSION['from']=$from_loc;
	$_SESSION['to']=$to_loc;
	$_SESSION['date']=$date;
	$_SESSION['time']=$time;
	$_SESSION['car-type']=$type;

	$book_query="SELECT `car`.`car_id`, `car`.`name`, `car`.`type`, `car`.`availibility` FROM `car` WHERE (`car`.`availibility` =0)";
	$result=mysqli_query($con,$book_query);
	if(!$result){
			echo "select failed: $result<br>".$con->error;
		}
	else{ ?>

		<?php

		while($row=mysqli_fetch_row($result)){
			if($row[2]==$type){
				?> <div> 
				<?php
				$car_id=$row[0];
				echo  $row[0].$row[1].' available.'; ?> <input type="submit" class="book_btn" name="book" value="<?php echo $car_id; ?>">
				</div>
				
           	<?php
			}
			else{
				echo "Cab not available";
			}
		}
	}
}
?>
<script type="text/javascript">
  $(document).ready(function(){
    $(".book_btn").click(function(){
      console.log("working");
        $.ajax({
            url: "update.php",
            type: "POST",
            data: {book:<?php echo $car_id;?> }, //this sends the user-id to php as a post variable, in php it can be accessed as $_POST['uid']
            success: function(data){
              if(data==data){
                window.location="booked.php";
              }
            }
        });
    });
});
</script>


</body>
</html>