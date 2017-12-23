<?php
		
	$con = mysqli_connect("localhost","root","","puna");	
		//Getting  the Categories From Database
	if (mysqli_connect_errno()) {
	
		echo "Failed to connect to MYSQL" . mysqli_connect_errno();

	}

?>