<!DOCTYPE html>
<?php  include('db.php');
       include ('functions.php'); 
 ?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Item </title>

    <!-- Bootstrap Core CSS -->
    <?php include './link_style.php'; ?>

    <!-- Custom CSS -->
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
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

              echo "<a class='btn btn-warning ' id=\"login_btn\" href='logout.php'>Logout</a>";
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
                 <li class="active" id="link"><a href="products.php">All proudcts</a></li>
                 <li id="link"><a href="cart.php">Shopping Cart</a></li>
                 <li id="link"><a href="contactus.php">Contact us</a></li>
                 <li id="link"><a href="aboutus.php">About us </a></li>
                 
                </ul>
            </div>
            </div>
        </nav>


     <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-8" id= 'pic'>
            
            <?php    
              
            if (isset($_GET['pro_id'])) {
                
            $product_id = $_GET['pro_id'];            
                
            $get_pro = " select * From proudcts where product_id= $product_id ";

            $run_pro = mysqli_query($con, $get_pro);


            while ($row_pro = mysqli_fetch_array($run_pro)) {

                $pro_id    = $row_pro['product_id'   ];
                $pro_title = $row_pro['product_title'];
                $pro_price = $row_pro['product_price'];
                $pro_image = $row_pro['product_image'];
                $pro_desc  = $row_pro['product_desc'];

                echo "  <div class=\"col-sm-10 col-lg-10 col-md-10\">
                        <div class=\"thumbnail\" >
                            <img src= 'product_images/$pro_image' width=800px >
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
                                <P class='sucess'> $pro_desc  </P>           
                            </div>
                      
                            
                            </div>
                        </div>";



            }
            
         }

            ?>

            <a href="products.php"><h3>Go Back</h3></a>
            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        
        <!-- Footer -->
        <footer>
           <div class="lookWrap">
    <div id="look">
      <div class="section">
        <h3>Support</h3>
        <a href="#">FAQs</a>
        <a href="#">Contact Us</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Shipping Information</a>
        <a href="#">Return Policy</a>
        <a href="#">Item Exchange</a>
        <a href="#">Cash Back Rewards</a>
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
  <div class="legality">
        © Copyright 
</div>
        </footer>

    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
