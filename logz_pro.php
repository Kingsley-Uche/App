<?php ;


class receipt {
	public $kamx;
	 function __construct(){
		$hostname="localhost";
		$username="root";
		$password="";
		$database="fastfix";

		$this->kamx = new Mysqli($hostname,$username,$password,$database);}

		function check($user,$password){
			

			$command="SELECT* FROM customers WHERE cust_username='$user' AND cust_pwd='$password'";
			$output=$this->kamx->query($command);
			$result=$output->fetch_assoc();

			$_SESSION['user']=$result['cust_fname'].' '.$result['cust_lname'];
			$_SESSION['username']=$result['cust_username'];
			$_SESSION['profile_picture']=$result['profile_pic'];
			if($output->num_rows==1){

			header('location:dash.php');	
			
			}else{ 
$error="<div class='alert alert-info'>**Invalid username or password**</div>";
				header('location:log_out.php?err=$error');
				
			}
		}

		function art($user,$password){
			
			$type=$_SESSION['type'];
			$sql="SELECT* FROM artisans WHERE art_username='$user' AND art_pwd='$password'";
			
			 
			$output=$this->kamx->query($sql);
			
			
			
			$result=$output->fetch_assoc();
			$_SESSION['user']=$result['art_fname'].' '.$result['art_lname'];
			$_SESSION['username']=$result['art_username'];
			$_SESSION['profile_picture']=$result['profile_pic'];
			$_SESSION['a_id']=$result['art_id'];
			if ($output->num_rows==1){
				
				
				header('location:dash.php');
				
			}else{

			$error="<div class='alert alert-info'>**Invalid username or password**</div>";
			header("location:log_out.php?err=$error");
}

			
			//print_r($result);
			}
		


		function fetch_cust(){
			$sql="SELECT* FROM customers";
			$result=$this->kamx->query($sql);
			$row=array();

			while($res=$result->fetch_assoc()){
				$row[]=$res;

			}return $row;
			
			

		}


		function fetch_art(){
			$sql="SELECT*FROM artisans";
			$result=$this->kamx->query($sql);
			$row=array();
			while($output=$result->fetch_assoc()){
				$row[]= $output;
				
			}return $row;
			
			
			

		}



		function completed(){
			$sql ="SELECT* FROM service WHERE serv_status='completed'";
			$result=$this->kamx->query($sql);
			$row=array();
			while($res=$result->fetch_assoc()){
				$row[]=$res;
				
				

			}return $row;
		}



function progress(){
$sql ="SELECT* FROM service WHERE serv_status='in_progress'";
		$result=$this->kamx->query($sql);
			$row=array();
			while($res=$result->fetch_assoc()){
				$row[]=$res;

			}return $row;
		}

function pending(){
	$sql ="SELECT* FROM service WHERE serv_status='pending'";
	$result=$this->kamx->query($sql);
			$row=array();
			while($res=$result->fetch_assoc()){
				$row[]=$res;

			}return $row;

		}



		function complaints(){

			$sql="SELECT* FROM complaints";
			$result=$this->kamx->query($sql);
			$row=array();
			while($res=$result->fetch_assoc()){
				$row=$res;

				$complain_id=$row['comp_id'];
				$fullname=$row['cust_fname'].' '.$row['cust_lname'];
				$email=$row['email'];
				$phone=$row['phone'];
				$info=$row['information'];
				$time=$row['time'];
			echo "<p class='text-light m-1' style='background-color:black; text-transform:capitalize'>Name: $fullname<br>
					Email: $email<br>
					Phone: $phone<br>
					Information: $info<br>
					Time sent in:$time



			</p>";
		}
}


		function fetch(){
			$sql="SELECT * FROM states";
			$result=$this->kamx->query($sql);
			
			

			$row=array();
			while($res=$result->fetch_assoc()){
				$row[]=$res;
				
			
			} return $row;
			
	}
			
		function lgvt($state_id){


			$sql="SELECT * FROM local_governments WHERE state_id='$state_id'";
			$result=$this->kamx->query($sql);
			
			$row=array();
			while($res=$result->fetch_assoc()){
				$row[]=$res;


			}




$lg = json_encode($row);
echo $lg;
//return $lg;
		}

		
		function update_jobs($artisan_type){
			$sql="SELECT * FROM jobs WHERE job_type='$artisan_type'";
			$result=$this->kamx->query($sql);
			$row=array();
			while($res=$result->fetch_assoc()){
				$row[]=$res;
			}






		}	

		function trend_jobs(){
			$sql="SELECT * FROM jobs";
			$result=$this->kamx->query($sql);
			$row=array();
			while($res=$result->fetch_assoc()){
 

$row=$res;

$job_id=$row['jobs_id'];
$description=$row['jobs_desc'];
$type=$row['job_type'];
$location=$row['jobs_loc'];
$date=$row['jobs_date'];
$value=$row['jobs_id'];


echo "<form action=".' dash_submit.php'. "  method=".'post'.">"."<div class='caption'>"."<p style='text-transform:capitalize; color:rgb(35,33,45)'>"."Job id: $job_id"."<br>"."Nature of job:$type". "<br>"."Location:$location"."<br>"."Date posted:$date <br>"."</p>"."<button onclick=". "send($job_id)". " class="."trend"." btn btn-link"." type=".'submit'." name= 'jobz'"." id="."'last'".' value='.$value.">"."Apply now"."</button>"."</div>"."</form>";}
}
				


function job_status($art_id){
	$sql ="SELECT* FROM quote WHERE quoteart_id='$art_id' ";
	$exist=$this->kamx->query($sql);
	if($exist->num_rows==1){
		 while($result=$exist->fetch_assoc()){

	      	$row[]=$result;


	      };print_r($row);
		
	}
	     
	
}

function admin($username,$password){
	$sql="SELECT* FROM admin WHERE adminuser_name='$username' AND adminuser_pwd='$password'";
	$admin=$this->kamx->query($sql);
	$result=$admin->fetch_assoc();
	if($admin->num_rows==1){
		$_SESSION['admin']=$result['adminuser_name'];
		header("location:admin.php");
	}else{$error="<div class='alert alert-info'>**Invalid username or password**</div>";
			header("location:my_admin.php?err=$error");
		
}
	
}

				

function view_quotes($username){
	$sql="SELECT cust_fname,cust_lname,jobs_loc,jobs_date,job_type,quote_date,art_fname,art_lname,art_id,jobs_id FROM (((customers INNER JOIN jobs ON jobscust_id=cust_id)INNER JOIN quote ON quotejobs_id=jobs_id)INNER JOIN artisans ON art_id=quoteart_id) WHERE cust_username='$username'";
	$quote=$this->kamx->query($sql);
	$row=array();
	while($res=$quote->fetch_assoc()){
		
		$row[]=($res);
		
	}//print_r($row);
	for ($i=0; $i <count($row) ; $i++) { 
		$artisan=$row[$i]['art_fname'].' '.$row[$i]['art_lname'];
		$job_type=$row[$i]['job_type'];
		$quote_date=$row[$i]['quote_date'];
		$job_id=$row[$i]['jobs_id'];
		$art_id=$row[$i]['art_id'];
		echo "<div style='background-color:rgb(131,175,155); border-radius:5%'; margin-top:5% ;".">"."<p style='text-transform:capitalize; font-size:1.2em ;color:brown'> Handy man: ".$artisan.'<br>Job id:'.$job_id.'<br>Handy Man Id: '.$art_id.'<br>Job type:'.$job_type."<br>Time sent in: ".$quote_date.'<br>'."<button class='accept btn btn-info' type='button' data-toggle='modal' data-target='#accept'>Accept</button>"."</p>"."</div>";

		# code...
	}

}

	

}


			

		

			
			

		
			
			
		



		
	


		
	
	







?>