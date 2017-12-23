<!DOCTYPE html>
<?php
  session_start();
 include ('functions.php');  ?>
<html>
	<head>
		<meta charset="UTF-8">
		<title> PUNAnaza</title>

   <?php include './link_style.php'; ?>

   <style type="text/css">
    body{
      background: url("images");
    }
   </style>

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
            	</div>
                </form>
							
						
								

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
          <?php
            if(isset($_SESSION['user_email'])){

              echo "<a class='btn btn-warning  id=\"login_btn\"'href='logout.php'>Logout</a>";
            }else{
              echo "<div class=\"form-group col-md-1 pull-right\" id=\"login_btn\"  >
                  <a class=\"btn btn-primary\" href=\"checkout.php\">Login</a>
                  
              </div>

              <div class=\"form-group col-md-1 pull-right \" id=\"login_btn\"  >
                   <a class=\"btn btn-primary\" href=\"reg.php\">SignUp</a>                     
                  
              </div>

              ";
            }

          

          ?>


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
             
       			 <li id="link"><a href="contactus.php">Contact us</a></li>
        		 <li id="link"><a href="aboutus.php">About us </a></li>
        		 
      			</ul>
    		</div>
  			</div>
		</nav>


		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
    <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slider9.jpg" alt="Home">
      <div class="carousel-caption">

        <h2> We've got fun &amp; games! </h2>
      </div>
    </div>
    <div class="item">
      <img src="images/slider258.jpg" alt="boys">
      <div class="carousel-caption">
        <h3>Take a look at our latest winter clothing for boys and girls </h3>
      </div>
    </div>
    <div class="item">
      <img src="images/slidrer5.jpg" alt="Girls">
      <div class="carousel-caption">
        <h3> Each and every one of our products are lovingly hand-crafted by our dedicated team here in WooVille. </h3>
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
	</div>	

	</header>
	<hr>



	<article>
	<section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Proudct Categores</h1>
                    <!-- Single button -->
                   
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

        

      <?php
 	 		 getpro();   
       getcatpro();
         ?>
 	 		</div>

 			 

    </div>
		</div>

			 <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Features</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="images/shose.jpg" alt="">
                    <div class="caption">
                        <h3> Accessories </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="checkout.php" class="btn btn-primary">Buy Now!</a> <a href="products.php" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="images/back2.jpg" alt="">
                    <div class="caption">
                        <h3> Kids </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="checkout.php" class="btn btn-primary">Buy Now!</a> <a href="products.php" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="images/Baby-summer-fashion-2.jpg" alt="">
                    <div class="caption">
                        <h3>Girls</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="checkout.php" class="btn btn-primary">Buy Now!</a> <a href="products.php" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="images/Baby-summer-fashion-1.jpg" alt="">
                    <div class="caption">
                        <h3> Boys </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="checkout.php" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
	</article>



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