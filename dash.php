 <?php session_start();
 if($_SESSION['user']==false){header('location:log.php');}
 ?>

<?php
include('header.php');

?>

 <div class="row m-2" >
<div class="col-md-6" >
 <div class="mt-3"><h2  class="welcome mt-3">Welcome <?php echo $_SESSION['user'];?></h2></div>
 <?php
 if(isset($_SESSION['msg'])){
 echo $_SESSION['msg'];
}
if(isset($_GET['err'])){
  $error=$_GET['err'];
  echo $error;
}
?>
  <form action="accept4rm_dash.php" method="post" accept-charset="utf-8">
    

  
<div class="" id="image"> 
  <?php if(isset($_SESSION['profile_picture'])){ ?>
  <img  class='img-fluid m-1' style='max-width:40%' src= <?php echo $_SESSION['profile_picture'];?>>
 <?php }else{?> <img  class='img-fluid m-1' src="icons/ava.png" class="img-fluid m-1"> <?php } ?>
  <button type="button" class='btn btn-link' id='prf'>Change profile picture</button>
</div>

<?php 
if($_SESSION['type']=='artisan'){?>
  <a href="update_form.php"><button type="button" class="btn-sm btn-info m-2">Update profile</button></a>
  <div class="form-group"><button type="" class="btn-sm btn-info">My earnings</button></div>
  <div class="form-group"><button class="btn-sm btn-info" button type="submit">Search</button><input type="search" name="pick" placeholder="Search jobs"></div>

  <div class="form-group"><button type="submit" class="btn btn-info">Update job status</button></div>
</form>






<?php }else{?>


  <div>
    
  <button class="btn btn-warning m-1" type="button" id="my_q">View quotes on my post</button>

</div>
    <div id="my_quotes" style="max-height:200px; overflow: scroll"><div></div></div>
  <h2>How can we help you?</h2>
 <form action="accept4rm_dash.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
  <div class="form-group"><label>*Please select the handy man you need</label></div>
  <div class="form-group"><label> Carpenter<input type="checkbox" name="type[]" value="carpenter"></label></div>
  <div class="form-group"><label>Bricklayer<input type="checkbox" name="type[]" value="bricklayer"></label></div>
 <div class="form-group m-1"> <label>Welder<input type="checkbox" name="type[]" value="welder"></label></div>
 <div class="form-group"><label>Painter<input type="checkbox" name="type[]" value="painter"></label></div>
<div class="form-group"><label> Tiler<input type="checkbox" name="type[]" value="tiler"></label></div>
 <div class="form-group"><label>Electrician<input type="checkbox" name="type[]" value="electrician"></label></div>

  <div class="form-group"><label>Others<input type="checkbox" name="type[]" value="other"></label></div>
 


 <div class="form-group" >
  <label>Describe the nature of the damage(s)</label><br>
  <textarea name="describe" value="" placeholder="Describe the nature of the damage"required="required" rows="5"></textarea>
 
 </div>  
   

  <div class="form-group" >
  <label>Location</label><br>
  <textarea name="location" value="" placeholder="location like 20 Dele Adeniyi, Lekki Phase 1" required="required" rows="5"></textarea>
 
 </div> 
 <button type="submit" class="btn btn-success">Submit</button>
 </form>





<?php } 


?>
</div>
<div class="col-md-6">
  <?php   if(isset($_SESSION['update'])){
  echo $_SESSION['update'];

}               ?>
<h2 class="m-2 ">Trending jobs</h2>
  <div class ="tri m-1 P-2" id="jobs"></div>
 <button type="button" id='wat' class='btn-sm btn-info'>View more</button>

</div>  


</div>


 
</div>
  



 
 <div class ="row">
   

<div col-md-6>



</div>
<div col-md-6>
  


</div>

 </div>   


 
 <!-- Modal for job application -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="update">Job application</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="dash_submit.php" method="post" accept-charset="utf-8">
          
        
            <div class="form-group">
          <label class="text-info">Please type the job id that you are applying for</label><br><input type="text" name="job_id" placeholder="job id">
            </div>
            <div class="form-group">
          <label class="text-info">Please type your unique id</label><br><input type="text" name="handy" placeholder="handy man id">
            </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" id="quotes">APPLY</button>
      </div>
        </form>
    </div>
  </div>
</div>



 <!-- Modal for job apllication -->
<div class="modal fade" id="accept" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:rgb(131,175,155)">
        <h5 class="modal-title" id="update">Handy man selection</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="accept.php" method="post" accept-charset="utf-8">
          
        
            <div class="form-group">
          <label class="text-info">Please key in the job id</label><br><input type="text" name="job_id" placeholder="job id">
            </div>
            <div class="form-group">
          <label class="text-info">Please type the handy man id</label><br><input type="text" name="handy" placeholder="handy man id">
            </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" id="quotes">Done</button>
      </div>
        </form>
    </div>
  </div>
</div>


    
       <?php

include ('footer.php');

?>

<script>
  $(document).ready(
    $("#my_q").click(
      function(){
        var id="myqoute";
        $.ajax({
          type:'POST',
          data:"code="+id,
          url:"quoted.php",
          success:function(msg){
              var z=msg;
              $("#my_quotes").append(z);
           
            
            
          }

        })
      
      })
    );
  $(document).ready(
    $("#my_q").click(
      function(){
        var input=this;
        input.disabled=true;
      })
    );


</script>

