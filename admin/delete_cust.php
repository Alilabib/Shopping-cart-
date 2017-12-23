<?php 

	include("../db.php");

	if(isset($_GET['delete_cust'])){

	$delete_id = $_GET['delete_cust'];

	$delete_cust = "delete from customers where cust_id = '$delete_id' " ;

	$run_delete = mysqli_query($con, $delete_cust);

	if($run_delete){

		echo "<script>alert ('a customer has been deleted!') </script>";

		echo "<script>window.open('main.php?client_card','_self')</script>";
	}

	}


?>