<?php if(!isset($_SESSION)){
session_start();
}

?>



<!DOCTYPE HTML>
<html  lang = "eng">
              <head>
                      <meta charset="utf-8">
                      <meta http-equiv="x-ua-compatible" content="ie=edge">
                      <title>Fastfix home</title>
                      <meta name="description" content="This site connects users to artisans">
                      <meta name="viewport" content="width =device-width, initial-scale =1">
                      <meta name="Author" content="Olekamma Kingsley Uche">
                      <link rel="" href="awesome/all.css">
                      <link rel="manifest" href="site.webmanifest">
                      <link rel="stylesheet" href="css/bootstrap.css">
                      <link rel="stylesheet" href="mystyle/css.css">
                      <style type="text/css">
                      	
                         
                        
                      </style>
                      

                     
                      
                </head>
              <body>
    		<div class="container-fluid" >
    			<div class="row" style="height:7em; border:1 px solid red" >
          
          <div style="position:fixed;width:100%; display:flex;z-index:1" class="nav mt-1">
    				<div class="col-lg-6 bg-white"><a href="fastfix.php"><img src="images/logo.jpg" class="img-fluid"></a>
              <span style="font-size: 1.5em ;color:gray;">Fastfix</span>
              <span style="font-size:0.8em;color:gray;">...hire with peace of mind</span>
    					<br><span style= "font-size:1em; background-color:rgb(239,43,63);" class="text-white">Hotlines:08034278894, 07030121470</span>
    				</div>

    				<div class="col-lg-6 bg-light">
          <nav class="navbar navbar-expand-sm navbar-light  text-light m-1" style="background-color:rgb(239,43,63);border-radius:5%;">
                   
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav text-white" >
                      <?php if(isset($_SESSION['user'])){ ?>

                         <li class="nav-item active">
                          <a class="nav-link" href="dash.php">Home <span class="sr-only">(current)</span></a>


                        <?php
                     }else{?>

                         <li class="nav-item active">
                          <a class="nav-link" href="fastfix.php">Home <span class="sr-only">(current)</span></a>
                          </li>
                        
                        
                        <li class="nav-item">
                          <a class="nav-link btn" href="join_us.php" id="join">Join us</a>
                        </li>

                   <?php  }?>
                       
                        
                        <?php
                        if(isset($_SESSION['user'])){ ?>
                        <li class="nav-item">
                          <a class="nav-link btn " href="log_out.php" id="log">Log out</a>
                        </li>
                        
                        <?php

                      }else{ ?>
                         <li class="nav-item">
                          <a class="nav-link btn" href="log.php" id="log">Log in</a>
                        </li>

                      




                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle btn" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Popular Categories
                          </a>
                          <div class="dropdown-menu btn primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item btn btn-info" href="#" >Carpenters</a>
                            <a class="dropdown-item" href="log.php">Electricians</a>
                            <a class="dropdown-item" href="log.php">Welders</a>
                            <a class="dropdown-item" href="log.php">Plumbers</a>
                            <a class="dropdown-item" href="log.php">Bricklayers</a>
                            <a class="dropdown-item" href="log.php">Drivers</a>
                            <a class="dropdown-item" href="log.php">Others</a>
          
          
<button type="button" class="btn  btn-info" data-toggle="modal" data-target="#exampleModal">
  Chat us up
</button>
<li class="nav-item">
        <a class="nav-link mr-1 btn" href="contact_us.php" id="connect">Contact us</a>
      </li>
        </div>
      </li><?php } ?>
    </ul>
  </div>
</nav>    

            </div>

       </div>
     </div>