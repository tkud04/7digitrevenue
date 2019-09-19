  <?php
   $class = "alert-success";   
           
   if($val == "error"){
   	$class = "alert-danger";         
   } 
  ?>                
  <div class="alert {{$class}}" role="alert">
     <p>@if($val == "error")<strong>Whoops!</strong> @endif {{$signal[$pop]}}</p>
     <button class="close" data-dismiss="alert">x</button>
     <div class="clearfix"></div>
     <br><br>                      
  </div>