<!DOCTYPE html>
<?php 
 session_start(); 

include ('functions.php');  ?>
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
          <?php
            if(isset($_SESSION['user_email'])){

              echo "<a class='btn btn-warning pull-right' id=\"login_btn\" href='logout.php'>Logout</a>";
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
                 <li  id="link"><a href="index.php">Home</a></li>
                 <li  id="link"><a href="products.php">All proudcts</a></li>
                 <li class="active" id="link"><a href="cart.php">Shopping Cart</a></li>
             
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
                    <h1>Your Cart</h1>
                    
                    <form  action="" method="POST" enctype="multipart/form-data">
                        
                        <table class="table table-condensed">
                        <tr>  
         




                        <th>Remove    </th>
                        <th>Product(s)</th>
                        <th>Quantity  </th>
                        <th>Total Price</th>
                        <tr>
                          <?php
                            $total=0;
                            global $con;

                            $ip = getIp();

                            $sel_price = "select * from cart where ip_add='$ip'";

                            $run_price = mysqli_query($con,$sel_price);

                            while ($p_price=mysqli_fetch_array($run_price)) {
                              $pro_id = $p_price['p_id'];
                              $pro_price = "select * from proudcts where product_id ='$pro_id' ";
                              $run_pro_price= mysqli_query($con,$pro_price);
                              while ($pp_price=mysqli_fetch_array($run_pro_price)) {
                                      
                                  $product_price = array($pp_price['product_price']);
                                  $product_title = $pp_price['product_title'];
                                  $product_image = $pp_price['product_image'];
                                  $single_price  = $pp_price['product_price'];

                                  $values = array_sum($product_price);

                                  $total += $values;
                                  

                                  

                                  

                            
                            

                          ?>
                          <tr>  
                            <th><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"/></th>
                            <th><?php echo $product_title;?> <br> 
                             <img src="product_images/<?php echo $product_image; ?>" width="60" height="60" />   
                            </th>
                            <th><input type="text" size="3" name="qty" value="<?php $_SESSION['qty']; ?>"/></th>
                              <?php 
                                  if(isset($_POST['update_cart'])){
                                    $qty = $_POST['qty'];
                                    $update_qty="update cart set qty ='$qty' ";

                                    $run_qty = mysqli_query($con, $update_qty);

                                    $_SESSION['qty']=$qty;
                                        
                                    $total = $total*$qty;    
                                  }

                              ?>

                            <th><?php echo "$".$single_price; ?></th>
                          </tr>
                          


                        <?php } } ?>  
                          <tr>
                            <th ><B>Sub Total </B></th>
                            <th ><?php echo "$" . $total ; ?></th>
                          </tr>
                          <tr>
                             <th><input class="btn btn-danger" type="submit" name="update_cart" value="Update Cart"    ></th>
                             <th><input class="btn btn-info" type="submit" name="continue"  value="Continue Shopping"></th>
                             <th><a class="btn btn-primary" href="checkout.php">checkout</a></th>
                          </tr>
                        </table>

                    </form>
                    <?php 

                  
            
                          global $con;

                        $ip = getIp();


                        if (isset($_POST['update_cart'])) {
                            foreach ($_POST['remove']as $remove_id ) {
                              $delete_product = "delete from cart where p_id ='$remove_id' AND ip_add='$ip'"; 

                              $run_delete = mysqli_query($con,$delete_product);
                              if ($run_delete) {
                                echo "<script>window.open('cart.php','_self')</script>";
                              }
                            }
                          }  

                          if (isset($_POST['continue'])) {
                                
                                echo "<script>window.open('index.php','_self') </script>";
                          }
                          
      
                    ?>
                   
                </div>
            </div>
        </div>
    </section>

    <br> <br>


	
		<div class="row">
			<div class="container">
         <div class="row">

            <div class="col-md-3">
                  
                <div class="list-group">
                    
                    <?php getcats(); ?>

                </div>
            </div>

        

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
                            <a href="login.php" class="btn btn-primary">Buy Now!</a> <a href="products.php" class="btn btn-default">More Info</a>
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
                            <a href="login.php" class="btn btn-primary">Buy Now!</a> <a href="products.php" class="btn btn-default">More Info</a>
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
                            <a href="login.php" class="btn btn-primary">Buy Now!</a> <a href="products.php" class="btn btn-default">More Info</a>
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
                            <a href="login.php" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
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