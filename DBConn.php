<?php 	
$db_host="localhost";	
$db_username="root";	
$db_password="";	
$db_name="grand_hotel";

$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);	

	//check connection
	if(mysqli_connect_error())
	{
		echo "<h3>Failed to connect to mySQL: </h3>" .mysqli_connect_error();
	}
	else
	{
		echo "<h3>Connected!</h3>"; //comment out row when it connects
		//echo '<script>alert("Database Connected!")</script>';
	}		
?> 


