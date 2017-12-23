<?php
		
	$con = mysqli_connect("localhost","root","","puna");	
		//Getting  the Categories From Database
		
	if (mysqli_connect_errno()) {
	
		echo "Failed to connect to MYSQL" . mysqli_connect_errno();

	}

		



      //Getting the user ip address



		function getIp() {
			$ip = $_SERVER['REMOTE_ADDR'];

			if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
				$ip = $_SERVER['HTTP_CLIENT_IP'];
				
			}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$ip =$_SERVER['HTTP_X_FORWARDED_FOR'];
			}

			return $ip;

		}

	 //Getting the Shopping cart	

	    function cart(){

	    	if(isset($_GET['add_cart'])){

	    		global $con;

	    		$ip = getIp();

	    		$pro_id = $_GET['add_cart'];

	    		$check_pro = "select * from cart where ip_add='$ip' AND p_id='$pro_id' ";

	    		$run_check= mysqli_query($con, $check_pro);

	    		if (mysqli_num_rows($run_check)>0) {
	    			echo " ";
	    		}
	    		else{
	    			$insert_pro = "insert into cart (p_id,ip_add) values('$pro_id','$ip')";
	    			$run_pro = mysqli_query($con,$insert_pro);
	    			 echo "<script> window.open('index.php','_self') </script>";
	    		}
	    	}
	    }
	


	 //Geeting the total added items

	 	function  total_items(){
	 		if (isset($_GET['add_cart'])) {
	 			
	 			global $con;

	 			$ip = getIp();

	 			$get_items = "select * from cart where ip_add='$ip'";

	 			$run_items = mysqli_query($con, $get_items);

	 			$count_items = mysqli_num_rows($run_items);
	 		}else{
	 			global $con;
	 			$ip = getIp();

	 			$get_items = "select * from cart where ip_add='$ip'";

	 			$run_items = mysqli_query($con, $get_items);

	 			$count_items = mysqli_num_rows($run_items);	

	 		}
	 		echo $count_items;

	 	}


		function getcats(){

			global $con;

			$get_cats = "select * From categories ";

			$run_cats = mysqli_query($con, $get_cats);

			while ($row_cats = mysqli_fetch_array($run_cats)) {
					
					$cat_id = $row_cats['cat_id'];
					$cat_title = $row_cats['cat_title'];

					echo "<a href=\"index.php?cat=$cat_id\" class=\"list-group-item\"> $cat_title </a>";

			}


		}
		

		function getpro(){

			if (!isset($_GET['cat'])) {
				if (!isset($_GET['brand'])) {
					
				
			

			global $con;

			$get_pro = " select * From proudcts order by rand() LIMIT 0,2 ";

			$run_pro = mysqli_query($con, $get_pro);


			while ($row_pro = mysqli_fetch_array($run_pro)) {

				$pro_id    = $row_pro['product_id'   ];
				$pro_cat   = $row_pro['product_cat'  ];
				$pro_brand = $row_pro['product_brand'];
				$pro_title = $row_pro['product_title'];
				$pro_price = $row_pro['product_price'];
				$pro_image = $row_pro['product_image'];

				echo "  <div class=\"offset-6  col-md-4\">
                        <div class=\"thumbnail \">
                            <img src= 'product_images/$pro_image'>
                            <div class=\"caption\">
                                <h4 class=\"pull-right\">$ $pro_price</h4>
                                <h4><a href=\"item.php?pro_id=$pro_id\">$pro_title</a>
                                </h4>
                                 <a href=\"item.php?pro_id=$pro_id\">See more </a>
                               <a href=\" cart.php?add_cart=$pro_id \" >
                               				<button class=\"btn btn-primary\ pull-right\" type=\"button\">
 							 					Buy <span class=\"badge glyphicon glyphicon-shopping-cart\">  </span>
											</button>
								</a>			
                            </div>
                      
                            
                        	</div>
                    	</div>";



			}
		   }
		  }	

		}




function getcatpro(){

			if (isset($_GET['cat'])) {
				
				$cat_id = $_GET['cat'];
					
				
			

			global $con;

			$get_cat_pro = " select * From proudcts where product_cat='$cat_id' ";

			$run_cat_pro = mysqli_query($con, $get_cat_pro);

			$count_cats =mysqli_num_rows($run_cat_pro);

			if ($count_cats==0) {
				
					echo "<div class='offset-4 col-md-6'>
						   <h3 class=\"alert alert-danger\"> There is no product in this Category! </h3>

					       </div>   ";

					exit();
				}



			while ($row_cat_pro = mysqli_fetch_array($run_cat_pro)) {

				$pro_id    = $row_cat_pro['product_id'   ];
				$pro_cat   = $row_cat_pro['product_cat'  ];
				$pro_brand = $row_cat_pro['product_brand'];
				$pro_title = $row_cat_pro['product_title'];
				$pro_price = $row_cat_pro['product_price'];
				$pro_image = $row_cat_pro['product_image'];

				

				echo "  <div class=\"col-sm-4 col-lg-4 col-md-4\">
                        <div class=\"thumbnail\">
                            <img src= 'product_images/$pro_image'>
                            <div class=\"caption\">
                                <h4 class=\"pull-right\">$ $pro_price</h4>
                                <h4><a href=\"#\">$pro_title</a>
                                </h4>
                                 <a href=\"item.php?pro_id=$pro_id\">See more </a>
                               <a href=\" index.php?pro_id=$pro_id \" >
                               				<button class=\"btn btn-primary\ pull-right\" type=\"button\">
 							 					Buy <span class=\"badge glyphicon glyphicon-shopping-cart\">  </span>
											</button>
								</a>

								            <a class=\" btn btn-primary \" href=\"products.php\"><h5>Go TO Allproducts</h5></a>
			
                            </div>
                      
                            
                        	</div>
                    	</div>";

                   	}

                  } 	

                }  





?>