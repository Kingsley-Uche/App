<?php session_start();
require 'direct.php';


if($_POST){
	if($_SESSION['a_id']==true){
		$job_id=($_POST['jobz']);
	

	$artisan=$_SESSION['a_id'];
	
$obj= new retrieve;


$obj->artisan_apply($job_id,$artisan);


	}else{
		$check='<h3 style="color:red">Please log in with  artisan account</h3>';
		header('location:dash.php? errs=$check');
	}
	
}




?>