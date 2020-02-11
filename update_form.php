<?php session_start();

 if($_SESSION['user']==false){header('location:log.php');}

include('header.php');



?>

 <div class="row m-3" >
<div class="col-lg-2" >

  




</div>
<div class="col-lg-8 m-1" align="center">
  <div><h2 style="color:orange; font-size:25px" class='welcome'>Welcome <?php echo $_SESSION['user'];?></h2>
  <h2>Kindly fill the verification form below</h2></div>
 <form action="get4rmupdate_form.php" method="post" accept-charset="utf-8" name="verify" enctype="multipart/form-data">
  <div class="form-group" >
  <label>*Please select skill</label><br>
  <select name="skill"required="required">
  <option value="">Select skill</option>
  <option value="carpenter">Carpenter</option>
  <option value="builder">Builder</option>
  <option value="welder">Welder</option>
  <option value="plumber">Plumber</option>
    <option value="electrician">Electrician</option>
  </select>
  
 </div> 

 <div class="form-group">
  <label>Date of Birth</label><br>
  <input type="date" name="dob" value="" placeholder="Date of birth" required="required">
  </div>

  <div class="form-group" >
  <label>Upload valid means of identification(Int'l passport,National I.d,voter's card or Driver's licence)</label><br>
  <input type="file" name="identification" value="" placeholder="upload a valid means of identification"required="required">
  
 </div>  



 
  <div class="form-group">
  <label>Provide us with your referee Name</label><br>
  <input type="text" name="ref" value="" placeholder="referee"required="required">
  
 </div>


  <div class="form-group">
  <label>Referee address</label><br>
  <input type="text" name="ref_add" value="" placeholder="referee's address"required="required">
  
 </div>
  <div class="form-group">
  <label>Referee email</label><br>
  <input type="email" name="re_email" value="" placeholder="referee" required="required">
  
 </div>
 <div class="form-group">
  <label>Referee phone</label><br>
  <input type="number" name="ref_phone" value="" placeholder="referee" required="required">
  
 </div>
 <div class="form-group">
  <label>Your bank name</label><br>
  <input type="text" name="bank_name" value="" placeholder="eg UBA,ACEESS,KEYSTONE,etc" required="required">
  
 </div>
 <div class="form-group">
  <label>Account name</label><br>
  <input type="text" name="acct_name" value="" placeholder="eg Kenedy Swata" required="required">
  
 </div>
 <div class="form-group">
  <label>Account number</label><br>
  <input type="number" name="acct_number" value="" placeholder="referee" required="required">
  
 </div>
 <div class="form-group">
  <label>Select State of residence</label><br>
  <select name="state" required="required" id="state" >
    
<option value=""  >Select State</option>

<?php

  
    $r=$obj->fetch();
    
  
    foreach($r as $row){

      $id=$row['id'];
      $state=$row['name'];
  
    
   echo "<option value=$id name='$state'>$state</option>";}


?>






  </select>
  
 </div>

<div class="form-group">
  <label>Select local government of residence</label><br>
  <select required="required" name="lg" id="lg">
    
<option value="" id="sister">Select local government of residence</option>

  

  </select>
 </div>
<div class="form-control">
<button type="submit" class="btn-sm btn-success" name="send">Submit</button>
</div>
 </form>

</div>  

 <div class="row m-2" >
<div class="lg-2" id="display">
  

  



</div>

  

</div>

 
  </div>  





 
        
    
   
<?php

include('footer.php');
?>
            


            
                    
                </div>
        
       </div>
    </body>
</html>







  