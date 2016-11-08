

<?php

include 'connection.php';
require_once('auth.php');


$id=$_SESSION['id'];

if(isset($_POST['book_id'])){
    $bid = $_POST['book_id'];



$del_query="DELETE FROM `cab`.`book` WHERE `book`.`book_id` = '$bid'";
      $result=mysqli_query($con,$del_query);
      if(!$result){
        echo "select failed: $result<br>".$con->error;
      }
  else{
    $change_query="UPDATE `cab`.`car` SET `availibility` = '0' WHERE `car`.`car_id` = 3";   
    $result2=mysqli_query($con,$change_query);
      if(!$result){
        echo "select failed: $result<br>".$con->error;
      }
	  else{
	  	echo '1';
	  }       
      }
  }



if(isset($_POST['book'])){ 
	$a=$_POST['book'];
	$from_loc=$_SESSION['from'];
	$to_loc=$_SESSION['to'];
	$date=$_SESSION['date'];
	$time=$_SESSION['time'];
	$update_query="UPDATE car SET availibility = 1 WHERE car_id =$a ";
	$result=mysqli_query($con,$update_query);
	if(!$result){
			echo "select failed: $result<br>".$con->error;
		}
	else{		
	$book_query="INSERT INTO book (cus_id,loc_from,loc_to,book_date,book_time,car_id) VALUES('$id','$from_loc','$to_loc','$date','$time',$a)";
	$result2=mysqli_query($con,$book_query);
	if(!$result2){
			echo "select failed: $result2<br>".$con->error;
		}
	else{
		echo '1';
	}
	}
}
?>
