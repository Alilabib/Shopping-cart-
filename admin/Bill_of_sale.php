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
    <script src="js/jquery-3.0.0.min.js"></script>

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>


      
    <!-- Bootstrap Core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">

   

</head>

<body>


           

            <div class="container">
                 <div class="col-md-9">
                    <h2> New Bill Of Sale</h2>
              <form  action="Bill_of_sale.php" method="post"  name="add_name" id="add_name">
                <table class="table table-condensed" id="dynamic_field">
                    <thead>
                       
                    </thead>
                    <tbody>
                         <tr>
                          <th> <label for="date"> Bill Date</label> </th>
                          <th> <input type="text" class="form-control" name="order_date" id="date" placeholder="Enter Date of day "> </th>
                          

                        </tr>
                       <tr>

                        <th> <label for="S.N">Bill S.N</label> </th>   
                        <th> <input type="text" class="form-control" name="order_num" id="S.N" placeholder="Enter Bill serial Number "> </th>
                        </tr>

                        <tr>

                        <th> <label for="client"> Name of Customer </label> </th>   
                        <th> <input type="text" class="form-control" name="order_cust" id="client" placeholder="Enter Name of Client "> </th>
                       </tr>

                    
                        <div id="items">
                         <tr>
                          <th> <label for="client"> Name of product </label> </th>   
                          <th> <input type="text" class="form-control" name="order_pro"       id="client" placeholder="Enter Name of product "> </th>
                          <th> <input type="text" class="form-control" name="order_proprice"  id="client" placeholder="Enter price Of piece "> </th>
                          <th> <input type="text" class="form-control" name="order_numpieces" id="client" placeholder="Enter Number of piecses "> </th>
                          
                         </tr>
                       </div>
                       
                       <tr>
                           
                        <th><input type="button" name="add" id="add" name="add" class="btn btn-success" value="ADD" ></th>
                       </tr>
                       


                        <tr>
   
                       </tr>
                       
                       <tr>
                          <th></th>
                          
                       </tr>
                       </div>
                      </div>
  

                       <tr>
                        <th> <input type="submit" class="form-control" name="insert_bill"  value="Insert NOW!"> </th>  
                       </tr>

                    </tbody>
                </table>
              </form> 
            </div>



            <?php
   



           if (isset($_POST['insert_bill'])) {

                //Getting the text data from the fields
   
            $order_date         = $_POST['order_date'   ];
            $order_num          = $_POST['order_num'    ];
            $order_cust         = $_POST['order_cust'   ];
            $order_pro          = $_POST['order_pro'   ];
            $order_proprice     = $_POST['order_proprice'   ];
            $order_numpieces    = $_POST['order_numpieces'   ];
            
            $order_total        = $order_numpieces * $order_proprice ;  
          
            
 
            

            $insert_order = " insert into orders (order_date ,order_num,order_cust,order_pro,order_proprice,order_numpieces , order_total) values
            ('$order_date ','$order_num','$order_cust','$order_pro','$order_proprice','$order_numpieces','$order_total')" ;

           $insert_pro = mysqli_query($con, $insert_order);

           if ($insert_pro ) {
                
                echo "<script> alert('Order Has been inserted! ') </script>";

                echo "<script> window.open('main.php?Bill_of_sale','_self') </script>";
            } 

        }   
    

?>










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
                          <th> <label> Total bill                     </label> </th>
                          <th> <label> SHOW                           </label> </th>
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
                             $order_total    = $row_order['order_total'     ];
                             
                          

                             $i++;
                         ?>
                       <tr>
                       <th><?php echo $order_num;        ?>                                                                   </th>
                       <th><?php echo $order_date;       ?>                                                                   </th>
                       <th><?php echo $order_cust;       ?>                                                                   </th>
                       <th><?php echo $order_total."$";    ?>                                                                   </th>
                       <th> <a class="btn btn-info" href="Show_order.php?order_id=<?php echo $order_id; ?>">Show            </a> </th>
                       
                       <th> <a class="btn btn-danger" href="delete_order.php?delete_order=<?php echo $order_id; ?>">Delete  </a> </th>
                       </tr>
                       <?php  } ?>
                    </tbody>
                </table>
            </div>

</div>




 <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="order_pro[]" placeholder="Enter Name of product" class="form-control name_list" /><td><input type="text" name="order_proprice[]" placeholder="Enter price Of piece " class="form-control name_list" /><td><input type="text" name="order_numpieces[]" placeholder="Enter Number of piecses" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>  


    <!-- jQuery -->
    
    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/add.js"></script>
</body>

</html>

