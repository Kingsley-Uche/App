<?php
session_start();
if(isset($_POST['send'])){
	if($_SESSION['user']==true){
		echo 'hey';
	print_r($_FILES);
	require 'direct.php';


$user_name=$_SESSION['username'];
$tmp_name=$_FILES['identification']['tmp_name'];
$file_type=strtolower($_FILES['identification']['type']);
$file_name= $user_name.time().$_FILES['identification']['name'];
$error =$_FILES['identification']['error'];
$image_size=$_FILES['identification']['size'];
$acceptable=array('image/jpg','image/png','image/jpeg','application/pdf');
$destination="uploads/".$file_name;
if(!in_array($file_type, $acceptable)){
	echo "The file type is not supported.";
}else{echo 'ready for upload.';
/*echo "<pre>";
print_r($_POST);
echo "</pre>";
echo $_POST['skill'];*/

move_uploaded_file($tmp_name, $destination);
$ref_address=$_POST['ref_add'];
$ref_name=$_POST['ref'];
$ref_email=$_POST['ref_email'];
$ref_phone=$_POST['ref_phone'];
$bank=$_POST['bank_name'];
$acct_name=$_POST['acct_name'];
$acct_number=$_POST['acct_number'];
$state=$_POST['state'];
$lga=$_POST['lg'];
$skill=$_POST['skill'];
$dob=$_POST['dob'];


$push= new retrieve;
$push->art_update($user_name,$ref_address,$ref_name,$ref_email,$bank,$acct_name,$acct_number,$state,$lga,$skill,$dob,$file_name,$ref_phone,$file_name);
}


	



}else{header('location:log_out.php');}

}else(header('location:log_out.php'));



?>