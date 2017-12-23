jQuery(document).ready(function($)){
  
  var max_fields = 100;
  var wrapper    = $(".input_fields_warp");
  var add_button = $("#add_field_button" );

  var x = 1;
  $(add_button).click(function(e){
      e.preventDefault();
      if (x<max_fields) {
        x++;
        $(wrapper).append('<div>
                        <tr>
                        <th> <label for="client"> Name of product </label> </th>   
                        <th> <input type="text" class="form-control" name="order_pro" id="client" placeholder="Enter Name of product "> </th>
                       </tr>
                       <tr>

                        <th> <label for="client"> price of piece </label> </th>   
                        <th> <input type="text" class="form-control" name="order_proprice" id="client" placeholder="Enter price Of piece "> </th>
                       </tr>
                       


                        <tr>

                        <th> <label for="client"> Number of pieces </label> </th>   
                        <th> <input type="text" class="form-control" name="order_numpieces" id="client" placeholder="Enter Number of piecses "> </th>
                       </tr>
                       
                       <tr>
                          <th></th>
                          <th><a href="#"> class="remove_field">Remove</a></th>
                       </tr>

                       </div>');
    }
  });
    $(wrapper).on("click",".remove_field",function(e)){
          e.preventDefault(); $(this).parent('div').remove(); x--;

    })
    

  });
}