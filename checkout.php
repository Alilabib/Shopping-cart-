<!DOCTYPE html>
<?php 
 session_start(); 
include ('functions.php');  
include('db.php');
?>



<html>
	<head>
		<meta charset="UTF-8">
		<title> PUNAnaza</title>

   <?php include './link_style.php'; ?>
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
      		 	 <li class="active" id="link"><a href="index.php">Home</a></li>
       			 <li id="link"><a href="products.php">All proudcts</a></li>
             <li id="link"><a href="cart.php">Shopping Cart</a></li>
             
       			 <li id="link"><a href="#">Contact us</a></li>
        		 <li id="link"><a href="#">About us </a></li>
        		 
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
                    <h1>Check Out </h1>
                    <!-- Single button -->
                    <h3>  </h3>
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
          <div class="col-md-8">
          <?php
            if (!isset($_SESSION['user_email'])) {
                  include("login.php");
            }else{
                  include("payment.php");
            }



        ?>

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
    include('db.php');
  if (isset($_POST['login'])) {
    $email = mysql_real_escape_string($_POST['email']);
    $pass  = mysql_real_escape_string($_POST['pass']);
    $sel_user ="select * from users where user_email='$email' And user_password='$pass' " ;
    $run_user = mysqli_query($con,$sel_user);

    $check_user = mysqli_num_rows($run_user);

    if ($check_user==0) {
      echo "<script>alert('password Or email is wrong , try again!')</script>";
    }else{
      $_SESSION['user_email']=$email;
      echo "<script>window.open('checkout.php',_self)</script>";
    }
  }

?>
