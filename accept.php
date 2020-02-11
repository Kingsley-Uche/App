<?php session_start();
//This page accepts inputs selected artisan by customer from dash
if(isset($_SESSION['username'])){

	$job_id=$_POST['job_id'];
	$artisan_id=$_POST['handy'];
	require 'direct.php';
	$obj=new retrieve;
	$obj->service($job_id,$artisan_id);
}else{ header('location:log_out.php');}



?>