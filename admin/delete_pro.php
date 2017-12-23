<?php 

	include("../db.php");

	if(isset($_GET['delete_pro'])){

	$delete_id = $_GET['delete_pro'];

	$delete_pro = "delete from proudcts where product_id = '$delete_id' " ;

	$run_delete = mysqli_query($con, $delete_pro);

	if($run_delete){

		echo "<script>alert ('a product has been deleted!') </script>";

		echo "<script>window.open('main.php?view_products','_self')</script>";
	}

	}


?>