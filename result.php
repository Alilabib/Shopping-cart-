<!DOCTYPE html>

<?php

include ("functions.php");
session_start(); 

?>

<html lang="en">

<head>

    <meta charset="utf-8">
    

    <title>Products</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/produacts.css" rel="stylesheet">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
#login_btn {
    margin-left: 0;
    margin-top: -39px;
}

</style>


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="aboutus.php">About</a>
                    </li>
                    <li>
                        <a href="cart.php">CArt</a>
                    </li>
                    <li>
                        <a href="contactus.php">Contact</a>
                    </li>
                </ul>


                                        
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

                
                    </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                  <a href="index.php">  <img src="images/logo-bonanza - Copy.png"></a>
                <div class="list-group">
                    
        

                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="images/baby1slider.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/baby2slider.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/baby3slider.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/baby4slider.jpg" alt="">
                                </div>

                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
       <?php         
             
             if(isset($_GET['search'])){   

            $search_query = $_GET['user_query'];  

            $get_pro = " select * From proudcts where product_title like '%$search_query%' ";

            $run_pro = mysqli_query($con, $get_pro);


            while ($row_pro = mysqli_fetch_array($run_pro)) {

                $pro_id    = $row_pro['product_id'   ];
                $pro_cat   = $row_pro['product_cat'  ];
                $pro_brand = $row_pro['product_brand'];
                $pro_title = $row_pro['product_title'];
                $pro_price = $row_pro['product_price'];
                $pro_image = $row_pro['product_image'];

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
                            </div>    
                            </div>
                        </div>";                        

            }    

            }
?>

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
   <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
        

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>

</html>
