<?php
session_start();





if($_POST){
	require'logz_pro.php';
$uche=mysqli_connect("localhost", "root", "","fastfix");
$user = trim(strtolower(stripslashes($_POST["usr_name"])))?mysqli_real_escape_string($uche, $_POST["usr_name"]):"";
$password =trim(strtolower(stripslashes($_POST["pwd"])))?mysqli_real_escape_string($uche,$_POST["pwd"]):"";
//echo $user;
//die();
$type=$_POST['category'];
$_SESSION['type']=$type;
$uche = new receipt;


if($user==''||$password==''){
	$error="<div class='alert alert-danger'>**Please fill the needed fields**</div>";
	header("location:log_out.php?err=$error");
}

else if($type=='customer'){
$uche->check($user,$password);




}else if( $type=='artisan'){//This code authenticates user from database
$uche->art($user,$password);
$data=$uche->fetch_art($user,$password);
//print_r($data);
}//else{header('location:log.php');
	//   echo ('incorrect username  or password');}
//	}
}else{$error="<div class='alert alert-danger'>**Invalid log in details**</div>";
	header("location:log_out.php?$error=err");}
?>