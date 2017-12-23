<div class="container">
                 <div class="col-md-9">
                    <h2> </h2>
              <form  action="" method="post" >
                <table class="table table-condensed">
                    <thead>
                        <tr>
                              <th><h1> ADD New BRAND </h1></th>
                        </tr> 
                    </thead>
                    <tbody>
                         <tr>
                          <th> <label for="brand"> BRAND NAME</label> </th>
                          <th> <input type="text" class="form-control" name="new_brand" id="brand" required placeholder="Enter Brand Name "> </th>
                          
                        </tr>
                        <tr>

                              <tr>
                                   <th> </th> 
                                   <th> <input class="btn btn-primary" type="submit" name="add_brand" value="ADD Brand"></th></tr>
                        </tr>

                   </table>     
                </form>
           </div>
  </div>         


  <?php 
        include("../db.php");

        if (isset($_POST['add_brand'])) {
          
        

        $new_bra = $_POST['new_brand'];

        $insert_cat ="insert into brands (brand_title) values ('$new_bra')";

        $run_cat = mysqli_query($con,$insert_cat);

        if ($run_cat) {
          
          echo "<script>alert('New Category has been inserted') </script>";
          echo "<script>window.open('main.php?view_cats','_slef') </script>";
        }
}
  ?>
