<!DOCTYPE html>

<?php
        include('../db.php');
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Client Order </title>

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
                    <h2> View All Bills Here </h2>
              <form  action="Bill_of_sale.php" method="post" >
                <table class="table table-bordered">
                    <thead>
                       
                    </thead>
                    <tbody>
                         <tr>
                          <th> <label> Bill S.N                       </label> </th>
                          <th> <label> Bill Date                      </label> </th>
                          <th> <label> Name of Customer               </label> </th>
                          <th> <label> Name of product                </label> </th>
                          <th> <label> price of pieces                </label> </th>
                          <th> <label> Number of pieces               </label> </th>
                          <th> <label> Total bill                     </label> </th>
                          <th> <label> Delete                         </label> </th>
                        </tr>
                         <?php
                      
                          $get_order = "select * from orders";

                          $run_order = mysqli_query($con, $get_order);

                          $i = 0 ;

                           while ($row_order = mysqli_fetch_array($run_order)) {
                             
                             $order_id       = $row_order['order_id'        ];
                             $order_date     = $row_order['order_date'      ];
                             $order_num      = $row_order['order_num'       ];
                             $order_cust     = $row_order['order_cust'      ];
                             $order_pro      = $row_order['order_pro'       ];      
                             $order_proprice = $row_order['order_proprice'  ];
                             $order_numpieces= $row_order['order_numpieces' ];
                             $order_total    = $row_order['order_total'     ];

                             
                          

                             $i++;
                         ?>
                       <tr>
                       <th><?php echo $order_num;        ?>                                                                   </th>
                       <th><?php echo $order_date;       ?>                                                                   </th>
                       <th><?php echo $order_cust;       ?>                                                                   </th>
                       <th><?php echo $order_pro;        ?>                                                                   </th>
                       <th><?php echo $order_proprice;   ?>                                                                   </th>
                       <th><?php echo $order_numpieces;  ?>                                                                   </th>

                       <th><?php echo $order_total."$";    ?>                                                                 </th>
                       
                       
                       <th> <a class="btn btn-danger" href="delete_order.php?delete_order=<?php echo $order_id; ?>">Delete  </a> </th>
                       <th> <a class="btn btn-info"   href="printing.php"                                          >Print   </a> </th>
                       </tr>
                       <?php  } ?>
                    </tbody>
                </table>
            </div>

</div>


                   




    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

