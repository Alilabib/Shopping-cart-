<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> PUNAnaza</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <style type="text/css">
    .navbar-nav > li {
                
    float: left;
    padding-left: 100px;
    }

    </style>
  </head>
  <body>

    <header>

      <div class="container" id="nav">
          <div class="row">
          <div class="navbar-header">
        
              
              
              </div>
                

            </div>    
                <div class="form-group col-md-1" id="">
               
                </div>


            


          <!-- LOGO  -->

            <div class="col-md-4" id="Logo" >
                  <a href=""> <img src="../images/logo-bonanza.png"> </a>

            </div>  

           <!-- LOGO --> 


          </div>
        </div>

      <nav class="navbar navbar-default" >
       <div class="container-fluid">
          <div class="navbar-header">
             <a class="navbar-brand" href="#">Bonanza</a>
             <button type="button" class="navbar-toggle" data-toggle="collapse" 
             data-target=".navbar-collapse" >
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>


             </button>
          </div>
          
          <div class="collapse navbar-collapse"  id="center">
            <ul class="nav navbar-nav">
              <li class="active" id="main.php"><a href="main.php" >Home                  </a></li>
              <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">CReate <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="main.php?client_card"     >Client Card                </a></li>
                        <li><a href="main.php?Bill_of_sale"    >Create New Bill            </a></li>
                        <li><a href="main.php?Bill_of_buy"     >Create New Bill Of buy     </a></li>
                        <li><a href="main.php?insert_product"  >Insert New product         </a></li>
                        <li><a href="main.php?insert_cat"      >Insert New Category        </a></li>
                        <li><a href="main.php?insert_brand"    >Insert New Brand           </a></li>
                        <li class="divider"         >                                          </li>
                        <li><a href="main.php"                 >ADmin Panel                </a></li>
                      </ul>
                </li>
            
             <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">View <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="main.php?view_products"     >View All Products          </a></li>
                        <li><a href="main.php?view_cats"         >View All Categories        </a></li>
                        <li><a href="main.php?view_brands"       >View All Brands            </a></li>
                        <li><a href="main.php?view_customers"    >View All Customers         </a></li>
                        <li><a href="main.php?view_orders"       >View All Orders            </a></li>
                        <li><a href="main.php?view_payments"     >View All Payments          </a></li>
                        <li class="divider"                      >                               </li>
                        <li><a href="main.php"                   >ADmin Panel                </a></li>
                      </ul>
                </li>          
             <li class="" id=""><a href="CAM.html  "             >CAMERA                </a></li>    
             <li class="" id=""><a href="logout.php"             >LOG OuT               </a></li> 
            </ul>
        </div>
        
        </div>

    </nav>


   


  <hr>
  <article>
  <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>ADmin Panel</h1>
                    <!-- Single button -->
                   
                </div>
            </div>
        </div>
  </section>

    

  
    <div class="row">
      <div class="container">
  

            <div class="col-md-3">
                  
                <div class="list-group">
                    
                    <a href="main.php?view_products" class="list-group-item"> View All Products      </a> 
                    <a href="main.php?client_card"   class="list-group-item"> Client Card            </a>
                    <a href="main.php?Bill_of_sale"  class="list-group-item"> Create New Bill        </a>
                    <a href="main.php?Bill_of_buy"   class="list-group-item"> Create New Bill Of buy </a>
                    <a href="main.php?insert_product"class="list-group-item"> Insert New product     </a> 
                    <a href="main.php?insert_cat"    class="list-group-item"> Insert New Category    </a> 
                    <a href="main.php?view_cats"     class="list-group-item"> view All Categories    </a> 
                    <a href="main.php?insert_brand"  class="list-group-item"> Insert New Brand       </a> 
                    <a href="main.php?view_brands"   class="list-group-item"> view All Brands        </a>
                    <a href="main.php?view_customers"class="list-group-item"> view All Customers     </a>
                    <a href="main.php?view_orders"   class="list-group-item"> view All Orders        </a>
                    <a href="main.php?view_payments" class="list-group-item"> view All Payments      </a>
                    <a href="CAM.html"               class="list-group-item"> CAMERA                 </a>
                    <a href="logout.php"             class="list-group-item"> LOG OuT                </a>     
                </div>
            </div>
     <div class="col-md-6">            
          <?php
              if(isset($_GET['insert_product'])){
                include("insert_Item.php");
              }


              if(isset($_GET['view_products'])){
                include("view_product.php");
              }

               if(isset($_GET['view_cats'])){
                include("view_cats.php");
              }

               if(isset($_GET['view_brands'])){
                include("view_brands.php");
              }

               if(isset($_GET['view_orders'])){
                include("view_orders.php");
              }

               if(isset($_GET['view_customers'])){
                include("view_customers.php");
              }



              if(isset($_GET['edit_pro'])){
                include("edit_pro.php");
              }

              if(isset($_GET['insert_cat'])){

                include("insert_cat.php");
              }

              if(isset($_GET['client_card'])){

                include("client_card.php");
              }

              if (isset($_GET['Bill_of_sale'])) {
                  include("Bill_of_sale.php");     
              }

              if (isset($_GET['Bill_of_buy'])) {
                  include("Bill_of_buy.php");     
              }

              if(isset($_GET['insert_brand'])){

                include("insert_brand.php");
              }

           ?>

      </div>

      

    </div>
    </div>

       <hr>

        <!-- Title -->
        


     <footer>
           <div class="container">
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
  

        </footer>



    <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>