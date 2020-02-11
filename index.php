<?php

include("header.php");


?>



          <div class="row m-1">
            <div class="col-md-12" id="outer" style="background-image:url(images/w.jpg);">
              <div id="inner" class="p-1"><h3 class="info">What we do...</h3>

                  <p class="info" >We connect you to registered and trained handyman closest to you in a snap of a finger.
                  <br>We provide quality service within the shortest possible time.
                  <br>Do you need a <b>Plumber,</b><b>an electrician,</b><b>a tiler,</b> 
                  <b> or a carpenter?</b> 
                  <br>Join us today and enjoy peace of mind.
                       </p>
                <p class="info">Join the many that trust our services.
                <span class="info">Your peace of mind is our watchword.</span></p>
                <form class="form-group" method="post" action="log.php">
                <select required="required">
                  <option value="">Select a handyman</option>
                  <option value="plumber">Plumber</option>
                  <option value="elect">Electricians</option>
                  <option value="carpe">Carpenters</option>
                  <option value="brick">Brick layers</option>
                  <option value="tile">Tilers</option>
                  <option value="others"> Others</option>
                  </select>
                  <button type="submit" class="val btn btn-warning">SEARCH</button>
                </form>
              </div>

            </div>
            
          </div>

    			
          </div>
    				<div class= "row m-1" >
              <h3>Our Services</h3>
              <div class="row m-2" >
    					<div style="" class="col-lg-2">
    					<img src="images/brick.jpg" class="img-fluid" >
    					<h5>Brick layers</h5>
            </div>
    				
    				<div class="col-lg-2">
    					<img src="images/elect.jpg" class="img-fluid" >
    					<h5>Electricians</h5>
    					
    				</div>
    				<div style="" class="col-lg-2">
    					<img src="images/welder.jpg" class="img-fluid" >
    					<h5>Welders</h5>
    				
    				</div>
    				<div class="col-lg-2">
    					<img src="images/tile.jpg" class="img-fluid">
    					<h5>Tilers</h5>
    					
    				</div>
            <div class="col-lg-2">
              <img src="images/paint.jpg" class="img-fluid">
            <h5>Painters</h5>
              
            </div>



            <div class="col-lg-2">
              <img src="images/back.jpeg" class="img-fluid">
              <h5>Carpenters</h5>
            </div>
    				</div>

    				
    			</div>
        </div>
    			<div class="row pl-1 ">
    				<div class="col-md-6 tri" ><h4 class=>How it works</h4>
              <p><img src="icons/sign.jpg" class="mg-fluid">*Sign up with us as user.</p>
              <p><img src="icons/select.png" class="img-fluid">*Select the kind of service you require.</p>
              <p><img src="icons/des.png" class="img-fluid">*Describe the nature of the problem.</p>
              <p><img src="icons/upload.png" class="img-fluid">*Upload a picture that describes the nature of the problem.</p>
              <p><img src="icons/quote.jpeg" class="img-fluid">*Our handymen would send in quotes(cost implication of the repairs).</p>
              <p><img src="icons/mobile.png" class="img-fluid">*You select your preferred handy man and pay via card on our platform.</p>
              <p><img src="icons/go.png" class="img-fluid">*Our handyman comes to your house and carry out repairs.</p>

    					
    				
    			</div>
    			<div class="col-md-6">
            <div class ='caption pl-2' ><span>Trending jobs</span><img src="images/process.gif" class="img-fluid" width="10%"></div>
            <div class ="tri m-1" id="jobs">
              <form action="else.php" method="post">
                
              </form>


            </div>
    				<button type="button" id='wat' class='btn-sm btn-info'>View more</button>
    			</div>
    			</div>
    			<div class="row m-1">
    				<div class="col-12 footer"><h6>&copy;KammaSoft</h6>
    					
    				</div>
    				
    			</div>
    			


			</div>
    </div>

          
        
       
                    <script src="js/jquery.js" type="text/javascript" ></script>
                    <script src="js/popper.min.js" type="text/javascript"></script>
                    <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" ></script>
                    <script src="mystyle/js.js" type="text/javascript" charset="utf-8" ></script>



                    <!-- Modal -->
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
      
          
        
            <div class="">
              <h5 class="text-info">Please log in to apply for well paying jobs within your area.</h5>
      
            </div>
           
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
        </form>
    </div>
  </div>
</div>

    </body>
</html>