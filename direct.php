<?php if(!isset($_SESSION)){session_start();}




class retrieve{

	public $access;

function __construct(){
$hostname="localhost";
$username="root";
$password="";
$database="fastfix";
$this->access= new Mysqli($hostname,$username,$password,$database);}

function load($firstname, $lastname,$email,$phone,$username,$password,$address){

	$command = "INSERT INTO customers SET cust_fname='$firstname',cust_lname='$lastname',cust_email='$email',cust_phone='$phone',cust_pwd='$password', cust_add='$address',cust_username='$username'" ;
	

	$status = $this->access->query($command);
	if( $status==1){
		echo '<h3 style="color:green">You registered succesfully</h3>';
		header("Refresh:4;url=join_us.php");
		
	}else {echo '<p style="color:red">The username or password you supplied is unavailable.</p>' ;
		
}




}




function art($firstname, $lastname,$email,$phone,$username,$password,$address){

	$command = "INSERT INTO artisans SET art_fname='$firstname',art_lname='$lastname',art_email='$email',art_phone='$phone',art_pwd='$password', art_addr='$address',art_username='$username'" ;
	

	$status = $this->access->query($command);
	if( $status==1){
		
		header("location:join_us.php");
		echo '<h3 style="color:green">You registered succesfully</h3>';
		
	}else {echo '<h4 style="color:red">The username or password you supplied is unavailable.</h4>' ;
	;
		
}




}
function complaints($firstname,$lastname,$email,$phone,$info){

			$sql="INSERT INTO complaints SET cust_fname='$firstname',cust_lname='$lastname', email='$email',phone='$phone',information='$info' ";
			$status=$this->access->query($sql);
			if($status==1){
				$check='<h3 style="color:green">Your complaint has been reecieved and will be attended to promptly</h3>';
				header('location:fastfix.php? success=$check');
				  


			}else{
				$check='<h3 style="color:red">Something went wrong</h3>';
				header('location:fastfix.php? success=$check');
			}
		}



function post_jobs($username,$describe,$location,$type){
		$user_name=$_SESSION['username'];

	$pick="SELECT cust_id FROM customers WHERE cust_username='$user_name'";
	
	$status=$this->access->query($pick);
	$row =$status->fetch_assoc();
	$id=$row['cust_id'];

foreach($type as $t){
	$insert="INSERT INTO jobs SET jobscust_id='$id',jobs_desc='$describe',jobs_loc='$location',job_type='$t'";

	echo $insert;
	$update=$this->access->query($insert);
	
	if($update){

		header('location:dash.php');
		$check="<div style='color:green'>Your request has been submitted and one of our agents will contact you shortly.</div>";
		$_SESSION['update']=$check;



}


		
	}



}


function art_update($user_name,$ref_address,$ref_name,$ref_email,$bank,$acct_name,$acct_number,$state,$lga,$skill,$dob,$file_name,$ref_phone){
	$update="UPDATE artisans SET artref_name='$ref_name',artref_addr='$ref_address',artref_email='$ref_email',artbank_name='$bank',artbank_number='$acct_number',artlgvt_id='$lga',art_skill='$skill',art_dob='$dob',art_ident='$file_name',artref_phone='$ref_phone' WHERE art_username='$user_name'";

$status=$this->access->query($update);
if($status==1){

	$_SESSION['msg']= "<div class='alert alert-success'>Your update was succesful</div>";
	header('location:dash.php');
}else{$_SESSION['msg']="<div class='alert alert-danger'>Something went wrong. Please re apply or contact administrator if it persists. </div>";
header('location:dash.php');
}

}



function artisan_apply($job_id,$artisan){
	$sql="INSERT INTO quote SET quotejobs_id='$job_id',quoteart_id='$artisan'";
	$apply=$this->access->query($sql);
	if($apply==1){
		$_SESSION['msg']="<div class= 'alert alert-sucess'>You have succesfully applied for that job</div>";
		header('location:dash.php');
	}else{
		$_SESSION['msg']="<div class= 'alert alert-danger'>You have already applied for this job</div>";
		header('location:dash.php');
	}

}

function service($job_id,$artisan_id){
	$sql="INSERT INTO service SET servart_id='$artisan_id',servjob_id='$job_id'";
	$select=$this->access->query($sql);
	if($select==1){
		$_SESSION['msg']="<div class= 'alert alert-success'>Thank you for choosing us. Our agent will contact you shortly.</div>";
		header('locaton:dash.php');
	}else{$_SESSION['msg']="<div class= 'alert alert-danger'>You have already chosen a handyman for this job.If you have changed your mind, contact us on : 08034278894</div>";
	header('location:dash.php'); }
}

//This function stores picture information in the database for profile picture setting
function profile_picture($user,$path){
	$sql ="UPDATE artisans SET profile_pic='$path' WHERE art_username='$user'";
	$load=$this->access->query($sql);
	if($load==1){
		$_SESSION['msg']="<div class='alert alert-success'>Your upload was succesful!</div>";
		header('location:dash.php');
	}else{$_SESSION['msg']="<div class='alert alert-danger'>Your upload failed. Please try again or contact administrator if problem persists.</div>";
						echo $sql;
	//header('location:dash.php');
	

}
}
function profile_picture2($user,$path){
	$sql ="UPDATE customers SET profile_pic='$path' WHERE cust_username='$user'";
	$load=$this->access->query($sql);
	if($load==1){
		$_SESSION['msg']="<div class='alert alert-success'>Your upload was succesful!</div>";
		header('location:dash.php');
	}else{$_SESSION['msg']="<div class='alert alert-danger'>Your upload failed. Please try again or contact administrator if problem persists.</div>";
						echo $sql;
	//header('location:dash.php');
	

}
}

}





?>