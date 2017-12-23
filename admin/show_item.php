<!DOCTYPE html>
<?php  include('db.php') ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Item </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                
                <div class="form-group col-md-1 puul-left" id="login_btn"  >
                 
                </div>
                <a class="navbar-brand" href="main.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
        
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>


                            <div class="form-group col-md-1 pull-right" id="cart_btn" >
                            </div>


                        <div class="form-group col-md-1 pull-right" id="cart_btn"  >
            
                                        
                                    
                            </div>               
                    </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

     <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-8">
            
            <?php    
              
            if (isset($_GET['pro_id'])) {
                
            $product_id = $_GET['pro_id'];            
                
            $get_pro = " select * From proudcts where product_id= $product_id ";

            $run_pro = mysqli_query($con, $get_pro);


            while ($row_pro = mysqli_fetch_array($run_pro)) {

                $pro_id     = $row_pro['product_id'    ];
                $pro_title  = $row_pro['product_title' ];
                $pro_price  = $row_pro['product_price' ];
                $pro_image  = $row_pro['product_image' ];
                $pro_desc   = $row_pro['product_desc'  ];
                $pro_bprice = $row_pro['product_bprice'];
                $pro_cprice = $row_pro['product_cprice'];
                $pro_cquan  = $row_pro['product_cquan' ];
                $pro_nquan  = $row_pro['product_nquan' ];

                echo "  <div class=\"col-sm-7 col-lg-7 col-md-7\">
                        <div class=\"thumbnail\">
                            <img src= '../product_images/$pro_image' width=700px >
                            <div class=\"caption\">

                            

                            <table class=\"table table-bordered\"  >
                                <thead>
                                    <tr> 
                                        <th> <label> Product Title             </label> </th>
                                        <th> <label> Purchasing Price          </label> </th>
                                        <th> <label> Quantity Price            </label> </th>
                                        <th> <label> Selling Price             </label> </th>
                                        <th> <label> Purchasing Quantity       </label> </th>
                                        <th> <label>  current amount           </label> </th>
                                        <th> <label>  Product description      </label> </th>
                                    </tr>

                                    
                                </thead>
                                
                                    <tr>
                                        <th> <label> $pro_title       </label> </th>
                                        <th> <label> $pro_bprice      </label> </th>
                                        <th> <label> $pro_cprice      </label> </th>
                                        <th> <label> $pro_price       </label> </th>
                                        <th> <label> $pro_cquan       </label> </th>
                                        <th> <label> $pro_nquan       </label> </th>
                                        <th> <label> $pro_desc        </label> </th>


                                    </tr>
                            
                                </table>    
                
                                
                                            
                                 
                            </div>
                      
                            
                            </div>
                        </div>";



            }
            
         }

            ?>

            <a href="main.php?view_products"><h3>Go Back</h3></a>
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
