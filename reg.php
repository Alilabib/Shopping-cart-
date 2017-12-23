<!DOCTYPE html>
<?php include ('functions.php'); 
      include ('db.php');
 ?>
<html>
	<head>
		<meta charset="UTF-8">
		<title> PUNAnaza</title>

   <?php include './link_style.php';
         session_start(); 
    ?>
	</head>
	<body>

		<header>

			<div class="container" id="nav">
					<div class="row">
					<div class="navbar-header">
				
				      <div  class="col-md-4"  id="">
               <form action="result.php " method="get" > 
						  <div class="form-group " >
							 <input type="text" name="user_query"  class="form-control" id="search" placeholder="Search">	
               <button type="submit" name="search" class="btn btn-default" id="search_btn"> 
                   <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                  </button>
               </form>
							
							</div>
								

						</div>		
			


              <?php  cart(); ?>
							<div class="form-group col-md-1" id="cart_btn"  >
                <a href="cart.php">
									<button class="btn btn-primary" type="button">
 							 				Items <span class="badge glyphicon glyphicon-shopping-cart"><?php total_items(); ?></span>
									</button>
                  </a>
							</div>

					</div>


          <!-- LOGO  -->

						<div class="col-md-4" id="Logo" >
		    					<a href="index.php"> <img src="images/logo-bonanza.png"> </a>

						</div>	

           <!-- LOGO --> 

					

					</div>
				</div>

			<nav class="navbar navbar-default" >
 			 <div class="container-fluid">
  			  <div class="navbar-header">
   			  	 <a class="navbar-brand" href="index.php">Bonanza</a>
   			  	 <button type="button" class="navbar-toggle" data-toggle="collapse" 
   			  	 data-target=".navbar-collapse" >
   			  	 <span class="sr-only">Toggle navigation</span>
   			  	 <span class="icon-bar"></span>
   			  	 <span class="icon-bar"></span>
   			  	 <span class="icon-bar"></span>


   			  	 </button>
  			  </div>
  			  <div class="collapse navbar-collapse">
   			  	<ul class="nav navbar-nav">
      		 	 <li  id="link"><a href="index.php">Home</a></li>
       			 <li id="link"><a href="products.php">All proudcts</a></li>
             <li id="link"><a href="cart.php">Shopping Cart</a></li>
             <li class="active" id="link"><a href="reg.php">Rgestration PAge</a></li>
       			 <li id="link"><a href="contactus.php">Contact us</a></li>
        		 <li id="link"><a href="aboutus.php">About us </a></li>
        		 
      			</ul>
    		</div>
  			</div>
		</nav>
	</header>
	<hr>



	<article>
	<section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Register NOW </h1>
                    <!-- Single button -->
                    <h3>  Create an Account ! </h3>
                </div>
            </div>
        </div>
    </section>

    

	
		<div class="row">
			<div class="container">
         <div class="row">

            <div class="col-md-3">
                  
                <div class="list-group">
                    
                    <?php getcats(); ?>

                </div>
            
            </div>
                    
              <div id="reg_board" class="well col-md-8" >

          <form class="form-horizontal" method="POST" action="reg.php" enctype="multipart/form-data">
            
          <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">User Name</label>
              <div class="col-sm-10">
                 <input type="text" name="u_name" class="form-control" id="inputEmail" placeholder="User NAme" required>
              </div>
          </div>



          <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">User Email</label>
              <div class="col-sm-10">
                 <input type="text" name="u_email" class="form-control" id="inputEmail3" placeholder="Email" required>
              </div>
          </div>



          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label"> User Password</label>
            <div class="col-sm-10">
                <input type="password" name="u_pass" class="form-control" id="inputPassword3" placeholder="Password"required>
            </div>
          </div>

           <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label"> User Image</label>
            <div class="col-sm-10">
                <input type="file" name="u_image" class="form-control" id="inputPassword3" >
            </div>
          </div>

          <select class="form-control" name="u_country">
             <option>Select a Country</option>
              <option>Egypt</option>
                <option>KSA</option>
                  <option>UAE</option>
                    <option>moroco</option>
                    <option>japan</option>
                <option>Nepal</option>
                  <option>United States</option>
                    <option>Canda</option>
                    <option>United Kingdom</option>
           </select>

           <br>

          <div class="form-group">
            <label for="inputPasswor" class="col-sm-2 control-label"> User City </label>
            <div class="col-sm-10">
                <input type="text" name="u_city" class="form-control" id="inputPasswor" placeholder="City" required>
            </div>
          </div>



          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label"> User Phone NUmber</label>
            <div class="col-sm-10">
                <input type="text" name="u_contact" class="form-control" id="inputPass" placeholder="Phone Number" required>
            </div>
          </div>
          

          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label"> User Address </label>
            <div class="col-sm-10">
                <input type="text" name="u_address" class="form-control" id="inputPassword3" placeholder="Address">
            </div>
          </div>





          <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" name="register" class="btn btn-default">Sign UP</button>
                    </div>
          </div>

     

              </form>

        </div>




          </div>  

 
   	 		</div>

 			

    </div>
		</div>

			 <hr>

       <div>
        
       </div>


     <footer>
           <div class="container">
    <div id="look">
      <div class="section">
        <h3>Support</h3>
        <a href="#">FAQs</a>
        <a href="#">Contact Us</a>
      </div>
      <div class="section">
        <h3>Follow Us</h3>
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>        
        <a href="#">Pinterest</a>
        <a href="#">Blog</a>
        <a href="#">Ravelry</a>
        <a href="#">Sponsor</a>
        <a href="#">RSS</a>
      </div>
      <div class="section">
        <h3>About Us</h3>
        <a href="#">About</a>
        <a href="#">Testimonials</a>      
        <a href="#">The Team</a>        
      </div>      
    </div>
  </div>
  

        </footer>



		<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>



<?php 
    if (isset($_POST['register'])) {
        $ip = getIp();
        $u_name      =$_POST['u_name'  ];
        $u_email     =$_POST['u_email' ];
        $u_pass      =$_POST['u_pass'  ];
        $u_image     =$_POST['u_image' ];
        $u_image     =$_FILES['u_image']['name'];
        $u_image_tmp =$_FILES['u_image']['tmp_name'];
        $u_country   =$_POST['u_country'];
        $u_city      =$_POST['u_city'   ]; 
        $u_contact   =$_POST['u_contact'];
        $u_address   =$_POST['u_address'];

            move_uploaded_file($u_image_tmp, "user_image/$u_image");

          $insert_u ="insert into users(user_ip,user_name,user_email,user_password,user_country,user_city,user_contact,user_address,user_image) 
          values('$ip','$u_name','$u_email','$u_pass','$u_country','$u_city','$u_contact','$u_address','$u_image') ";

          $run_c = mysqli_query($con, $insert_u);

         $sel_cart ="select * from cart where ip_add='$ip'";

         $run_cart = mysqli_query($con,$sel_cart);

         if ($check_cart==0) {
                
                $_SESSION['user_email']=$u_email;

                echo "<script>alert('Account has been Created Successfully, Thanks!') </script>";
                echo "<script>window.open('checkout.php','_self') </script>";
          } 
    }


?>