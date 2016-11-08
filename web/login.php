<?php

include 'connection.php';

if(isset($_POST['submit'])){ 

	$user=$_POST['user'];
	$pass=$_POST['pass'];
	
	
		$sql="SELECT password,cus_id FROM  customer WHERE username='$user'";
		$result=mysqli_query($con,$sql);
		if(!$result){
			echo "select failed: $sql<br>".$con->error;
		}

		else
		{  $row=mysqli_fetch_row($result);
		
			if(($row[0])==$pass)
			{
				//echo "loged in!!!";
				session_start();
				$_SESSION['user']=$user;
				$_SESSION['id']=$row[1]
				?>
                  <script>
                  window.location="home.php";
                  </script>
				<?php
			}

			else
			{
				?>
                  <script>
                  window.location="index.html";
                  </script>
				<?php
			}
		}
	
}

?>
