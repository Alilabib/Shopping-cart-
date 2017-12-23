<?php
	include("../db.php");

	if(isset($_GET['delete_order'])){

	$delete_id = $_GET['delete_order'];

	$delete_order = "delete from orders where order_id = '$delete_id' " ;

	$run_delete = mysqli_query($con, $delete_order);

	if($run_delete){

		echo "<script>alert ('a Bill has been deleted!') </script>";

		echo "<script>window.open('main.php?Bill_of_sale','_self')</script>";
	}

	}


?>