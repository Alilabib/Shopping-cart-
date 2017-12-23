<!DOCTYPE html>

<?php
        include('functions.php');
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Item </title>

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

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
                
           
                <a class="navbar-brand" href="#">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">CArt</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>


                            <div class="form-group col-md-1 pull-right" id="cart_btn"  >
                                    <button class="btn btn-primary" type="button">
                                            Items <span class="badge glyphicon glyphicon-shopping-cart">0</span>
                                    </button>
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

            <div class="col-md-3">
                <img src="images/logo-bonanza - Copy.png">
                <div class="list-group">
                     <?php  getcats();  ?>
                </div>
            </div>

           

            <div class="container">
                 <div class="col-md-9">
                    <h2> Insert NEw Product</h2>
              <form  action="insert_item.php" method="post" enctype="multipart/form-data">
                <table class="table table-condensed">
                    <thead>
                       
                    </thead>
                    <tbody>
                         <tr>
                          <th> <label for="prdouct_title"> Product Title</label> </th>
                          <th> <input type="text" class="form-control" name="product_title" id="prdouct_title" placeholder="Enter product Title "> </th>
                          
                        </tr>
                       <tr>
                         <th> <label for="prdouct_cate"> Prdouct Category</label> </th>
                          <th> 
                                <select name="product_cat" id="producat_cate">
                                <option>Select a Categoey</option>
                                    <?php

                                        $get_cats = "select * From categories ";

                                         $run_cats = mysqli_query($con, $get_cats);

                                         while ($row_cats = mysqli_fetch_array($run_cats)) {
                    
                                         $cat_id = $row_cats['cat_id'];
                                         $cat_title = $row_cats['cat_title'];

                                         echo "<option value='$cat_id'> $cat_title </option>";
    
                                     }

                                    ?>

                                </select>

                           </th>
                       </tr>
                       <tr>
                         <th> <label for="prdoucat_bra"> Prdouct Brand</label> </th>
                          <th> 
                                 <select name="product_brand" id="producat_bra">  
                                 <option>Select a Brand</option>
                                    <?php

                                        $get_brands = "select * From brands ";

                                         $run_brands = mysqli_query($con, $get_brands);

                                         while ($row_brands = mysqli_fetch_array($run_brands)) {
                    
                                         $brand_id = $row_brands['brand_id'];
                                         $brand_title = $row_brands['brand_title'];

                                         echo "<option value='$brand_id'> $brand_title </option>";
    
                                     }

                                    ?>

                                </select> </th>
                       </tr>
                       <tr>
                           <th> <label for="prdouct_img"> Prdouct Image</label> </th>
                          <th> <input type="file" class="form-control" name="product_image" id="prdouct_img"> </th>
                       </tr>
                       <tr>
                           <th> <label for="prdouct_pri"> Prdouct Price</label> </th>
                          <th> <input type="text" class="form-control" name="product_price" id="prdouct_pri" placeholder="Enter product price "> </th>
                       </tr>

                       <tr>
                           <th> <label for="prdouct_des"> Prdouct Description</label> </th>
                          <th> <textarea name="product_desc" id="product_des" cols="10" rows="10"></textarea></th>
                       </tr>

                       <tr>
                           <th> <label for="prdouct_bar"> Prdouct barcode</label> </th>
                          <th> <input type="text" class="form-control" name="product_barcode" id="prdouct_bar" placeholder="Enter product barcode "> </th>
                       </tr>

                       <tr>
                          <th> <input type="submit" class="form-control" name="insert_post"  value="Insert NOW!"> </th>
                       </tr>

                    </tbody>
                </table>
              </form> 
            </div>
                   






















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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php
     if (isset($_POST['insert_post'])) {

                //Getting the text data from the fields

            $product_title   = $_POST['product_title'  ];
            $product_cat     = $_POST['product_cat'    ];
            $product_brand   = $_POST['product_brand'  ];
            $product_price   = $_POST['product_price'  ];
            $product_desc    = $_POST['product_desc'   ];
            $product_barcode = $_POST['product_barcode'];

                //Getting the image from the field 
            $product_image     = $_FILES['product_image']['name'];
            $product_image_tmp = $_FILES['product_image']['tmp_name'];

            move_uploaded_file($product_image_tmp, "product_images/$product_image");

            $insert_product = " insert into proudcts (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_barcode) values
            ('$product_cat ','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_barcode')" ;

           $insert_pro = mysqli_query($con, $insert_product);

           if ($insert_pro ) {
                
                echo "<script> alert('Product Has been inserted! ') </script>";

                echo "<script> window.open('insert_item.php','_self') </script>";
            } 

        }   
    

?>