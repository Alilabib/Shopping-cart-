<!DOCTYPE html>

<?php
       
        include("../db.php");

        if (isset($_GET['edit_pro'])) {

            $get_id = $_GET['edit_pro'];

           $get_pro = "select * from proudcts where product_id = '$get_id' ";

                          $run_pro = mysqli_query($con, $get_pro);

                          $i = 0 ;

                           $row_pro = mysqli_fetch_array($run_pro);
                             
                             $pro_id      = $row_pro['product_id'     ];
                             $pro_title   = $row_pro['product_title'  ];
                             $pro_image   = $row_pro['product_image'  ];
                             $pro_price   = $row_pro['product_price'  ]; 
                             $pro_barcode = $row_pro['product_barcode'];      
                             $pro_brand   = $row_pro['product_brand'  ];
                             $pro_cat     = $row_pro['product_cat'];
                             $pro_desc    = $row_pro['product_desc'];



        }



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


           

            <div class="container">
                 <div class="col-md-9">
                    <h2> Update Product</h2>
              <form  action="" method="post" enctype="multipart/form-data">
                <table class="table table-condensed">
                    <thead>
                       
                    </thead>
                    <tbody>
                         <tr>
                          <th> <label for="prdouct_title"> Product Title</label> </th>
                          <th> <input type="text" class="form-control" name="product_title" id="prdouct_title" placeholder="Enter product Title " value="<?php echo "$pro_title"; ?>"> </th>
                          
                        </tr>
                       <tr>
                         <th> <label for="prdouct_cate"> Prdouct Category</label> </th>
                          <th> 
                                <select name="product_cat" id="producat_cate">
                                <option><?php echo "$pro_cat"; ?></option>
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
                                 <option><?php echo "$pro_brand"; ?></option>
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
                          <th> <input type="file" class="form-control" name="product_image" id="prdouct_img" ><img src="../product_images/<?php echo $pro_image ?>" width="60" height="60"/>  </th>
                       </tr>
                       <tr>
                           <th> <label for="prdouct_pri"> Prdouct Price</label> </th>
                          <th> <input type="text" class="form-control" name="product_price" id="prdouct_pri" value="<?php echo "$pro_price";  ?>"> </th>
                       </tr>

                       <tr>
                           <th> <label for="prdouct_des"> Prdouct Description</label> </th>
                          <th> <textarea name="product_desc" id="product_des" cols="10" rows="10"><?php echo $pro_desc; ?></textarea></th>
                       </tr>

                       <tr>
                           <th> <label for="prdouct_bar"> Prdouct barcode</label> </th>
                          <th> <input type="text" class="form-control" name="product_barcode" id="prdouct_bar" value="<?php echo "$pro_barcode"; ?> "> </th>
                       </tr>

                       <tr>
                          <th> <input type="submit" class="form-control" name="update_product"  value="Update Now !"> </th>
                       </tr>

                    </tbody>
                </table>
              </form> 
            </div>
                   


              <?php
     if (isset($_POST['update_product'])) {

                //Getting the text data from the fields

            $update_id       = $pro_id;
            $product_title   = $_POST['product_title'  ];
            $product_cat     = $_POST['product_cat'    ];
            $product_brand   = $_POST['product_brand'  ];
            $product_price   = $_POST['product_price'  ];
            $product_desc    = $_POST['product_desc'   ];
            $product_barcode = $_POST['product_barcode'];

                //Getting the image from the field 
            $product_image     = $_FILES['product_image']['name'];
            $product_image_tmp = $_FILES['product_image']['tmp_name'];

            move_uploaded_file($product_image_tmp, "../product_images/$product_image");

            $update_product = "update proudcts set product_cat ='$product_cat' , product_brand ='$product_brand', product_title='$product_title' , product_price='$product_price', product_desc='$product_des',product_image='$product_image',product_cat='$product_barcode' where product_id='$update_id'  " ;

           $run_product = mysqli_query($con, $update_product);

           if ($run_product ) {
                
                

                echo "<script> window.open('main.php?view_products','_self') </script>";
            } 

        }   
    

?>



















    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

