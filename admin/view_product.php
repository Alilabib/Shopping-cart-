<!DOCTYPE html>

<?php
        include('../functions.php');
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
                    <h2> View All products Here </h2>
              <form  action="insert_item.php" method="post" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <thead>
                       
                    </thead>
                    <tbody>
                         <tr>
                          <th> <label> S.N                  </label> </th>
                          <th> <label> Product Title        </label> </th>
                          <th> <label> Image                </label> </th>
                          <th> <label> Purchasing Price     </label> </th>
                          <th> <label> Quantity Price       </label> </th>
                          <th> <label> Selling Price        </label> </th>
                          <th> <label> Purchasing Quantity  </label> </th>
                          <th> <label> The current amount   </label> </th>
                          <th> <label> SHOW                 </label></th>
                          <th> <label> Edit                 </label> </th>
                          <th> <label> Delete               </label> </th>
                        </tr>
                         <?php
                          include("../db.php");
                          $get_pro = "select * from proudcts";

                          $run_pro = mysqli_query($con, $get_pro);

                          $i = 0 ;

                           while ($row_pro = mysqli_fetch_array($run_pro)) {
                             
                             $pro_id    = $row_pro['product_id'    ];
                             $pro_title = $row_pro['product_title' ];
                             $pro_image = $row_pro['product_image' ];
                             $pro_bprice= $row_pro['product_bprice'];
                             $pro_cprice= $row_pro['product_cprice'];
                             $pro_price = $row_pro['product_price' ];
                             $pro_cquan = $row_pro['product_cquan' ];
                             $pro_nquan = $row_pro['product_nquan' ];
                             

                             $i++;
                         ?>
                       <tr>
                       <th><?php echo $i;           ?>                                                                   </th>
                       <th><?php echo $pro_title;   ?>                                                                   </th>
                       <th><img src="../product_images/<?php echo $pro_image; ?>" width="60" height="60"/>               </th>
                       <th><?php echo $pro_bprice;  ?>                                                                   </th>
                       <th><?php echo $pro_cprice;  ?>                                                                   </th>
                       <th><?php echo $pro_price ;  ?>                                                                   </th>
                       <th><?php echo $pro_cquan ;  ?>                                                                   </th>
                       <th><?php echo $pro_price ;  ?>                                                                   </th>
                       <th> <a class="btn btn-info" href="Show_item.php?pro_id=<?php echo $pro_id; ?>">Show         </a> </th>
                       <th> <a class="btn btn-warning" href="main.php?edit_pro=<?php echo $pro_id; ?>">Edit         </a> </th>
                       <th> <a class="btn btn-danger" href="delete_pro.php?delete_pro=<?php echo $pro_id; ?>">Delete</a> </th>
                       </tr>
                       <?php  } ?>
                    </tbody>
                </table>
            </div>
                   






















    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
