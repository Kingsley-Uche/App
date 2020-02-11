<?php

include("header.php");


?>
 <div class="row mt-5">
            <div class="col-md-4"></div>
            <div class="col-md-6">
              <form action="log_pros.php" method="post" accept-charset="utf-8" id="form-a">
                <div class="form-group">
                  <fieldset> <?php if(isset($_GET['err'])){
                    $error="<div class='bg-white' style='border-radius:15px'><p class='text-danger'>Invalid username or password</p></div>";
                   echo($error);} ?>
                    <legend>Log in details</legend>
                  
                  <label>Username<input type="text" name="usr_name" id="un" value="" class="form-control" placeholder="Type your username" required></label>
                  
                </div>

                 <div class="form-group" >
                  <label>Password<input type="password" name="pwd"id="pwd" value="" class="form-control" placeholder="Type your password" required></label>
                  
                </div>
               

                <div class="form-group" >
                  <p>Please select relevant category***</p>
                  <select name="category" required="required">
                    <option value="">Select</option>
                    <option value="customer">Customer</option>
                    <option value="artisan">Handy man</option>
                    
                  </select>
                </div>
                <button type="submit" class='btn btn-success' class="lg" id="log">Log in</button>
            
              <a href="#" id="sn">Sign up</a>
              </fieldset>
              </form>
              

               <form action="fastfix_pros.php" method="post" accept-charset="utf-8"id="form-b">
                      <fieldset>
                        
                      <legend>Secured Access details</legend>
                          <div class="form-group">
                        <label>First name<input type="text" name="name" value="" class="form-control" placeholder="First Name" id="f"></label>
                        
                      </div>
                      <div class="form-group">
                        <label>Last name<input type="text" name="lastname" value="" class="form-control" name="lastname"  placeholder="last name" id="l"></label>
                        
                      </div>
                      <div class="form-group">
                        <label>Email<input type="email" name="mail" value="" class="form-control" placeholder="Email Address"iid="e" ></label>
                       </div>
                       <div class="form-group">
                        <label>Phone<input type="number" name="phone" value="" class="form-control" placeholder="phone number" id="e" ></label>
                        
                      </div> 
                      <div>
                        
                        <label>Username<input type="text" name="usr_name" value="" class="form-control" placeholder="Type your username" id="us" ></label>
                        
                      </div>

                       <div class="form-group">
                        <label>Password<input type="password" name="pass" value="" class="form-control" placeholder="Type your password" id="psd"></label>
                        
                      </div>
                       <div class="form-group">
                        <label>Confirm password<input type="password" name="pwd" value="" class="form-control" placeholder="Confirm password" id="cfpsd"></label>
                        <p style="color: red" id="war"></p>
                      </div>
                        <div class="form-group">
                        <p class="text-primary">Please select what you need</p>

                        <select name="type" style="border-radius:5%; background-color:tomato" id="pick">
                          <option value="">Select</option>
                          <option value="service">I need a handy man</option>
                          <option value="handyman">I need a  job</option>
                        </select>
                        </div>
                      


                      <div class="form-group">
                        <label>Address<br><textarea name="add" cols="15" rows="5"></textarea></label>
                      </div>
                     <button type="button" class='btn btn-success' id="sign">Sign up</button>
                         <a href="#" class="lg">Log in</a>
                      </fieldset> 
                </form>
              
            </div>
            
          </div>
        </div>
      </div>


      <div class="row m-1">
                    <div class="col-md-12 footer">&copy;KammaSoft
                        
                    </div>
                    
                </div>
      
          <script src="js/jquery.js" type="text/javascript" ></script>
          <script src="js/popper.min.js" type="text/javascript"></script>
          <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" ></script>
        
        <script src="mystyle/js.js" type="text/javascript" charset="utf-8" ></script>
          <script type="text/javascript">
         




          



 
              
                  
                  
            
          
</script>
</body>
