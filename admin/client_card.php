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

    <title> Client Card </title>

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
                    <h2> New Client</h2>
              <form  action="client_card.php" method="post" >
                <table class="table table-condensed">
                    <thead>
                       
                    </thead>
                    <tbody>
                         <tr>
                          <th> <label for="client_name"> Client Name</label> </th>
                          <th> <input type="text" class="form-control" name="client_name" id="client_name" placeholder="Enter Client Name "> </th>
                           
                           <th> <label for="client"> Email </label> </th>   
                        <th> <input type="text" class="form-control" name="client_eamil" id="client" placeholder="Enter Client Email "> </th>                         

                        </tr>
                       <tr>

                        <th> <label for="client_pay">PAyments</label> </th>   
                        <th> <input type="text" class="form-control" name="client_pay" id="client_pay" placeholder="Enter payments "> </th>

                        <th> <label for="client_pruch">Total Purchases</label> </th>   
                        <th> <input type="text" class="form-control" name="client_pruch" id="client_pruch" placeholder="Enter Total Purchases "> </th>
                       </tr>
                       <tr>
                        
                        <th> <label for="client_phone">Phone</label> </th>   
                        <th> <input type="text" class="form-control" name="client_phone" id="client_phon" placeholder="Enter phone number "> </th>

                       </tr>
                          

                       <tr>
                          <th> <input type="submit" class="form-control" name="insert_client"  value="Insert NOW!"> </th>
                       </tr>

                    </tbody>
                </table>
              </form> 
            </div>

                <?php
                if (isset($_POST['insert_client'])) {

                //Getting the text data from the fields
   
            $cust_name         = $_POST['client_name'  ];
            $cust_Payments     = $_POST['client_pay'    ];
            $cust_tPurchases   = $_POST['client_pruch'  ];
            $cust_phone        = $_POST['client_phone'  ];
            $cust_email        = $_POST['client_eamil'   ];
            

            

            $insert_clien = " insert into customers (cust_name ,cust_Payments,cust_tPurchases,cust_phone,cust_email) values
            ('$cust_name ','$cust_Payments','$cust_tPurchases','$cust_phone',' $cust_email ')" ;

           $insert_pro = mysqli_query($con, $insert_clien);

           if ($insert_pro ) {
                
                echo "<script> alert('Client Has been inserted! ') </script>";

                echo "<script> window.open('main.php?client_card','_self') </script>";
            } 

        }   
    

?>











            <div class="container">
                 <div class="col-md-9">
                    <h2> View All Customers </h2>
              <form  action="client_card.php" method="post" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <thead>
                       
                    </thead>
                    <tbody>
                         <tr>
                          <th> <label> Customer S.N                   </label> </th>
                          <th> <label> Customer NAme                  </label> </th>
                          <th> <label> Customer Payments              </label> </th>
                          <th> <label> Customer Total Purchases       </label> </th>
                          <th> <label> Customer Phone                 </label> </th>
                          <th> <label> Customer Email                   </label> </th>
                         
                          
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

