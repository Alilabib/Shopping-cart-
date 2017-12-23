<!doctype html>
<?php
        include('../db.php');
?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="bootstrap3/css/font-awesome.css" rel="stylesheet" />
    
	<link href="assets/css/get-shit-done.css" rel="stylesheet" />  
    <link href="assets/css/demo.css" rel="stylesheet" /> 

    <!--     Font Awesome     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

     <script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
  
</head>

<body>

  <div id="divToPrint" style="">
  <div style="width:200px;height:300px;background-color:white;">
      <h3> Bill Of Sale </h3>
<form  action="Bill_of_sale.php" method="post" >
                <table class="table ">
                    <thead>
                       
                    </thead>
                 <!--   <tbody>
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

                      -->  
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
                       <th> ORDER NUMBER</th> 
                       <th><?php echo $order_num;        ?>                                                                   </th>
                       </tr>
                       <tr>
                        <th> ORDER DATE </th> 
                        <th><?php echo $order_date;       ?>                                                                   </th>
                       </tr>
                       <tr>
                        <th> ORDER SRIAL NUMBER</th>
                       <th><?php echo $order_cust;       ?>                                                                   </th>
                        </tr>
                        <tr>
                        <th>ORDER NAME OF PRODUCT</th>    
                        <th><?php echo $order_pro;        ?>                                                                   </th>
                        </tr>
                        <tr>
                        <th>PRODUCT PRICE</th>    
                        <th><?php echo $order_proprice;   ?>                                                                   </th>
                        </tr>
                        <tr>
                        <th>NUMBER OF PICES </th>    
                        <th><?php echo $order_numpieces;  ?>                                                                   </th>
                        </tr>
                        <tr>
                         <th>TOTAL Price </th>   
                        <th><?php echo $order_total."$";    ?>                                                                 </th>
                        </tr>
                       
                                                       
                    
                       <?php  } ?>
                    </tbody>
                </table>

            
  </div>
</div>
<div>
  <input type="button" value="print" onclick="PrintDiv();" />
</div>

</body>

    <script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/gsdk-checkbox.js"></script>
	<script src="assets/js/gsdk-radio.js"></script>
	<script src="assets/js/gsdk-switch.js"></script>
	<script src="assets/js/get-shit-done.js"></script>
	
    <script src="assets/js/custom.js"></script>

</html>