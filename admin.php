
<?php session_start();
if($_SESSION['admin']==false){
  header('location:log_out.php');
}
?>
<!doctype html>
<html  lang = "eng">
              <head>
                      <meta charset="utf-8">
                      <meta http-equiv="x-ua-compatible" content="ie=edge">
                      <title>Fastfix home</title>
                      <meta name="description" content="This site connects users to artisans">
                      <meta name="viewport" content="width =device-width, initial-scale =1">
                      <meta name="Author" content="Olekamma Kingsley Uche">

                      <link rel="manifest" href="site.webmanifest">
                      <link rel="stylesheet" href="css/bootstrap.css">
                      <link rel="stylesheet" href="mystyle/css.css">
                      <style type="text/css">
                        div{max-width: 100%;}
                      	.sub{border:1px solid red; max-height: 600px; overflow: scroll;
                        min-height:400px;
                        border-radius: 5% ; background-color: white}
                         img{border-radius: 5%}
                        .load{background-color:rgb(82,62,77); margin-top:10px; border-radius: 5%}
                        #complaints{background-color: white; border:1px solid red; border-radius: 5%; min-height: 400px; max-height: 600px; overflow:scroll}
                      </style>
                        
                      

                     
                      
                </head>
              <body>
    		<div class="container-fluid"  >
    			<div class="row nav-bar" style="">
    				<div class="col-lg-5" style= "background-color:white"><img src="images/logo.jpg">
              <span style="font-size: 1.5em">Fastfix</span>
              <span style="font-size:0.8em">...hire with peace of mind</span>
    					<br><span style= "font-size:1em;background-color:rgb(239,43,63);" class="text-white bag">Hotlines:08034278894, 07030121470</span>
    				</div>

    				<div class="col-lg-6" style="background-color: white">

            <h1>Welcome Administrator</h1>
            <p> You logged in at <?php
            date_default_timezone_set("Africa/Lagos"); 
            echo date("Y/m/d h:i:sa");?></p>
    					
    				</div>

    			</div>

          <div class="row m-2">
            <div class="col-md-4" style="background-color: white">
              <div><img src="images/corporate.jpg" class="img-fluid" height="5px"></div>
                 <div class ="load "><button type="button"  id="comp" class="btn btn-success">Completed jobs</button></div>
                   <div class ="load "><button type="button" id="prog" class="btn btn-info">Jobs in progress</button></div>
                   <div class ="load "><button type="button" id="customer" class="btn btn-dark">View all customers</button></div>
                    <div class ="load "><button type="button" id="handy" class="btn btn-dark">View all Handy men</button></div>
                 <div class ="load "><button type="button" id="pend" class="btn btn-secondary">Pending jobs</button></div>

                <div class="load m-2"><a href="log_out.php"><button type="button" id="log out" class="btn btn-danger">Log out</button></a></div>
                 
                 
                
              
            </div>
            <div class="col-md-4" >
              
              
              <div class ="sub" id="progress">
                <div><h2 class='text-info'>Jobs in progress</h2></div>
                

              </div>
              <div class ="sub" id="pending"><h2 class='text-secondary'>Pending jobs</h2></div>
              <div class ="sub" id="completed"><h2 class='text-sucess'>Completed jobs</h2></div>
              <div class ="sub" id="all_cust" ><h2>Our Customers</h2>
                <table id='contact' class="table table-responsive thead-dark">
                  <tr><th>Name</th><th>Email</th><th>Phone</th></tr>
                </table>
              </div>
              <div class ="sub" id="all_art"><h2 class='text-dark'>Our handy men</h2>

                <table id='arty' class="table table-responsive thead-dark">
                  <tr><th>Name</th><th>Email</th><th>Phone</th></tr>
                </table>
              </div>
               
            </div>
              <div class="col-md-4"><div><h3 class="text text-danger">Customers' complaints</h3></<div>
                <div id="complaints">
                
              </div>
                
              </div>
                
              </div> 
          </div>
</div>
          <script src="js/jquery.js" type="text/javascript" ></script>
          <script src="js/popper.min.js" type="text/javascript"></script>
          <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" ></script>
        
          <script type="text/javascript">
          $(document).ready(function(){
            
              $(".sub").hide();
            $('#progress').show();
            $("#comp").click(
            function(){
               $(".sub").hide();
              $("#completed").show();
             
             
            
            });
            $("#prog").click(
              function(){
                 $(".sub").hide();
                $("#progress").show();
               
              })
        
              
                  
              $("#customer").click(
              function(){
                 $(".sub").hide();
                $("#all_cust").show();
               
              })
                  
           $("#handy").click(
              function(){
                 $(".sub").hide();
                $("#all_art").show();
               
              })
            $("#pend").click(
              function(){
                 $(".sub").hide();
                $("#pending").show();
               
              })
          });   




           $(document).ready(
            $("#customer").click(
              function(){
              

               var m='cust';
                $.ajax({
                  type:"POST",
                  data:"pull="+m,
                  url:"all_cust.php",
                  dataType:"json",
                  success:function(msg){
                    console.log(msg[0]['cust_email']);
                    
                    
                    for(i=0;i<msg.length;i++){
                      var fname=msg[i]['cust_fname'];
                    var lname=msg[i]['cust_lname'];
                    var email=msg[i]['cust_email'];
                    var phone=msg[i]['cust_phone'];
                    
                    var fullname= fname +' '+ lname;

                      $('#contact').append("<tr>"+'<td>'+fullname+'</td>'+" <td>"+email+"</td> " +'<td>'+ phone +" </td>"+"</tr>");
                    }
                  }

                });
              })

            );





            $(document).ready(
            $("#handy").click(
              function(){
                

                
                var m='artisan';
                $.ajax({
                  type:"POST",
                  data:"pull="+m,
                  url:"all_cust.php",
                  dataType:"json",
                  success:function(msg){
                  
                    
                    for(i=0;i<msg.length;i++){
                    var fname=msg[i]['art_fname'];
                    var lname=msg[i]['art_lname'];
                    var email=msg[i]['art_email'];
                    var phone=msg[i]['art_phone'];
                    
                    var fullname= fname +' '+ lname;

                      $('#arty').append("<tr>"+'<td>'+fullname+'</td>'+" <td>"+email+"</td> " +'<td>'+ phone +" </td>"+"</tr>");
                    }
                  }

                });
              })

            );

$(document).ready(
              
              setInterval(
              function(){$('#complaints').load('complaints.php');
              }, 10000

             

              )  );









          
</script>
</body>
<div class='footer'>&copy KammaSoft 
  
</div>
</html>
