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

    <title> VIEW CATS </title>

  

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
                    <h2> View Categories </h2>
              <form  action="client_card.php" method="post" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <thead>
                       
                    </thead>
                    <tbody>
                         <tr>
                          <th> <label> Brand S.N                   </label> </th>
                          <th> <label> Brand NAme                  </label> </th>
                      

                        </tr>
                         <?php
                      
                          $get_client = "select * from Brands";

                          $run_client = mysqli_query($con, $get_client);

                          $i = 0 ;

                           while ($row_cli = mysqli_fetch_array($run_client)) {
                             
                             $cat_id          = $row_cli['brand_id'        ];
                             $brand_name      = $row_cli['brand_title'      ];
                           
                          

                             $i++;
                         ?>
                       <tr>
                       <th><?php echo $i;                ?>               </th>
                       <th><?php echo $brand_name;        ?>               </th>                                                    
                      
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






