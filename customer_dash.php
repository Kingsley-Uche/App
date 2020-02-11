<?php
include 'header.php';


?>





<div class="row m-2" >

<div class="col-md-6">
  <div><h2 style="color:orange; font-size:25px;">Welcome <?php echo $_SESSION['user'];?></h2>
  <h2>How can we help you?</h2></div>
 <form action="accept4rm_dash.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
  <div class="form-group">
  <label>*Please select the handy man you need</label><br>
  <div class="form-group"><label class=""> Carpenter<input type="checkbox" name="type[]" value="carpenter"></label></div>
  <div class="form-group"><label>Bricklayer<input type="checkbox" name="type[]" value="bricklayer"></label></div>
 <div class="form-group"> <label>Welder<input type="checkbox" name="type[]" value="welder"></label></div>
 <div class="form-group"><label>Painter<input type="checkbox" name="type[]" value="painter"></label></div>
<div class="form-group"><label> Tiler<input type="checkbox" name="type[]" value="tiler"></label></div>
 <div class="form-group"><label>Electrician<input type="checkbox" name="type[]" value="electrician"></label></div>
 </div> 


 <div class="form-group" >
  <label>Describe the nature of the damage(s)</label><br>
  <textarea name="description" value="" placeholder="Describe the nature of the damage"required="required" rows="10"></textarea>
 
 </div>  
  <div class="form-group" >
  <label>Picture of item(s) to be fixed</label><br>
  <input type="file" name="picture" value="" placeholder=" Please upload a picture of what needs repair"required="required">
  
 </div>  
 <button type="submit" class="btn btn-success">Submit</button>
 </form>
</div>
  
<div class="col-md-6">
 
  <h2 class="m-2">Trending jobs</h2>
 <div class = '' id="job" ></div>

</div>  



 
 <div class ="row">
   


</div>
<div col-md-6>
  


</div>

 </div>   




<?php


//include 'footer.php'
?>


