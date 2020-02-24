 $(document).ready(



            function(){
             $('#form-b').hide();
            $(".lg").click(
            function(){
              $("#form-a").show();
              $("#form-b").hide();
             
            
            })
            $("#sn").click(
              function(){
                $("#form-a").hide();
                $("#form-b").show();
                
              })
               })
      
                
                $(document).ready(
                $("#sign").click(
                  function(){
                    var pass=$("#psd").val();
                    var cf=$("#cfpsd").val();
                    var fn=$("#f").val();
                    var ln=$("#l").val();
                    var em=$("#e").val();
                    var type=$('#pick').val();


                    if($.trim((pass==""))||$.trim((cf==""))||$.trim((fn==""))||$.trim((ln==""))||$.trim((em==""))){
                      $("#war").html("Please supply the required field***"+'<br>'
                        +"Spaces are not allowed");
                      $("#psd,#cfpsd,#f,#l,#e,#us").addClass("check");
                    }if(pass!==cf){
                      $("#war").html("Password mismatch***");
                      $("#psd,#cfpsd,#f,#l,#e").addClass("check");
                    }if(type=="service"){
                      $("#form-b").submit();
                      $("#form-join").submit();




                      
                    }if((type=="artisan")){
                      $('#form-join').submit();
                    }                   
                    

                  }))






            $(document).ready(function(){
               $("#state").change(    //when a state is selected, fetch all the local governments under it using ajax.

           function(){
            var m=$('#state').val();
           $('#lg').html('');
          $.ajax({
              type:"POST",
              data:"state="+m,//var=val
              dataType:"json",
              url:"local.php",
              success:function(msg){
                for(i=0;i<msg.length;i++){
                 var lg_value=msg[i]['id'] ;
                 var lg_name=msg[i]['name'];
                $('#lg').append("<option value="+ lg_value+">"+lg_name+"</option>");
              }

                //console.log(msg);


              }


          })

         }
                    )
            } 

              
            );

            $(document).ready(
              
              setInterval(
              function(){$('#jobs').load('latest_jobs.php');
              }, 10000

             

              )  );
            
            $(document).ready(
              $(".trend").click(
                function(){
                  alert('else');
                }
                )
              );

$(document).ready(
  $("#qoutes").click(
    function(){
      alert('hey');
    }
    )


  );

$(document).ready(
  $('#prf').click(
function(){
  $('#image').append("<form action ='profile_pic.php' method='post' enctype='multipart/form-data' name='profile'>"+"<div class='form-group'>"+"<label>Please select your desired profile picture"+"</label>"+'<br>'+"<input type="+'file'+' name='+'sent'+' >'+'<br>'+'<button type="submit" name="send">Upload</button>'+"</div>"+"</form>");

}
    ))
$(document).ready(
  $('#prf').click(
    function(){
      var input=this;
      input.disabled=true;

    }
    )
  )
              
             