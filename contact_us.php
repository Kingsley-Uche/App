<?php
include 'header.php';



?>
<div class="row mt-5" position="relative">
	<div class="col-md-3"></div>
	<div class="col-md-7">
<h3>We are glad to hear from you.</h3>
<p>Please fill the form below</p>
<form method="post" action="comp.php" id="">
					<div class="form-group">

                        <label>First Name<input type="text" name="fname" value="" class="form-control" placeholder="First Name" id="e" required></label></div>
                        <div class="form-group">
                        <label>Last Name<input type="text" name="lname" value="" class="form-control" placeholder="Last Name" id="e" required></label>
                        
                      </div>
                        
                      
                      <div class="form-group">
                        <label>Email<input type="email" name="email" value="" class="form-control" placeholder="Email Address" id="e" required></label>
                        
                      </div>

                        <div class="form-group">
                        <label>Phone<input type="number" name="usr_number" value="" class="form-control" placeholder="Phone Number" id="us" required></label>
                        
                      </div>

                       <div class="form-group">
                        
						<textarea placeholder="Please describe" name="info" required></textarea>                        
                      </div>
                       
<?php
if(isset($_GET['status'])){

  echo $_GET['status'];
}

if(isset($_GET['success'])){
  echo $_GET['status'];

}
?>
	<br><button type="submit" class='btn btn-success'>Submit</button>
</form>
	<div class="col-md-2"></div>
</div>
</div>

<?php



include 'footer.php';

?>