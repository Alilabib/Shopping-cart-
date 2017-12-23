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

    <title> Orders </title>

  

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
                    <h2> View All Customers </h2>
              <form  action="client_card.php" method="post" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <thead>
                       
                    </thead>
                    <tbody>
                         <tr>
                          <th> <label> Company S.N                   </label> </th>
                          <th> <label> Company NAme                  </label> </th>
                          <th> <label> Company Payments              </label> </th>
                          <th> <label> Company Total Purchases       </label> </th>
                          <th> <label> Company Phone                 </label> </th>
                          <th> <label> Company Email                   </label> </th>
                          <th> <label> SHOW                 </label></th>
                          
                          <th> <label> Delete               </label> </th>
                        </tr>
                         <?php
                      
                          $get_client = "select * from customers";

                          $run_client = mysqli_query($con, $get_client);

                          $i = 0 ;

                           while ($row_cli = mysqli_fetch_array($run_client)) {
                             
                             $cust_id        = $row_cli['cust_id'        ];
                             $cust_name      = $row_cli['cust_name'      ];
                             $cust_Payments  = $row_cli['cust_Payments'  ];
                             $cust_tPurchases= $row_cli['cust_tPurchases'];
                             $cust_phone     = $row_cli['cust_phone'     ];
                             $cust_email     = $row_cli['cust_email'     ];
                          

                             $i++;
                         ?>
                       <tr>
                       <th><?php echo $i;                ?>                                                                   </th>
                       <th><?php echo $cust_name;        ?>                                                                   </th>
                       <th><?php echo $cust_Payments;    ?>                                                                   </th>
                       <th><?php echo $cust_tPurchases;  ?>                                                                   </th>
                       <th><?php echo $cust_phone;       ?>                                                                   </th>
                       <th><?php echo $cust_email ;      ?>                                                                   </th>
                       <th> <a class="btn btn-info" href="Show_cust.php?cust_id=<?php echo $cust_id; ?>">Show            </a> </th>
                       
                       <th> <a class="btn btn-danger" href="delete_cust.php?delete_cust=<?php echo $cust_id; ?>">Delete  </a> </th>
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

