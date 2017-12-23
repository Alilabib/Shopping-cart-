<div class="container">
                 <div class="col-md-9">
                    <h2> </h2>
              <form  action="" method="post" >
                <table class="table table-condensed">
                    <thead>
                        <tr>
                              <th><h1> ADD New Category </h1></th>
                        </tr> 
                    </thead>
                    <tbody>
                         <tr>
                          <th> <label for="Cat"> Category Name </label> </th>
                          <th> <input type="text" class="form-control" name="new_cat" id="Cat" required placeholder="Enter Category Name "> </th>
                          
                        </tr>
                        <tr>

                              <tr>
                                   <th> </th> 
                                   <th> <input class="btn btn-primary" type="submit" name="add_cat" value="ADD Category"></th></tr>
                        </tr>

                   </table>     
                </form>
           </div>
  </div>         


  <?php 
        include("../db.php");

        if (isset($_POST['add_cat'])) {
          
        

        $new_cat = $_POST['new_cat'];

        $insert_cat ="insert into categories (cat_title) values ('$new_cat')";

        $run_cat = mysqli_query($con,$insert_cat);

        if ($run_cat) {
          
          echo "<script>alert('New Category has been inserted') </script>";
          echo "<script>window.open('main.php?view_cats','_slef') </script>";
        }
}
  ?>