<?php
include('db.php');

?>

<div class="col-lg-12">
                  
                    <!-- Single button -->
                    <h3> LOGIN  Or Register to Buy ! </h3>
                </div>

    	 
    	
    		<div id="auth_board" class="well col-md-8" >

    		  <form class="form-horizontal" method="POST" action="checkout.php">
  				<div class="form-group">
  	  				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
  	  				<div class="col-sm-10">
  	   					 <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Email">
  	  				</div>
  				</div>
  				<div class="form-group">
    				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    				<div class="col-sm-10">
  					    <input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="Password">
    				</div>
  				</div>
  				<div class="form-group">
    				<div class="col-sm-offset-2 col-sm-10">
      				  <div class="checkbox">
        				<label>
          					<a class="label label-warning" href="checkout.php?forgot_pass">FOrgot Password</a>
        				</label>
      				  </div>
    				</div>
  				</div>
 			    <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" name="login" class="btn btn-default">Sign in</button>
                    </div>
          </div>

           <div class="form-group col-md-1" id="signup_btn"  >
                   <a class="btn btn-primary" href="reg.php">SignUp</a>                     
           </div> 


              </form>

    		</div>

      
        
    	
