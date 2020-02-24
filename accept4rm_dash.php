<?php
session_start();


require "direct.php";
$obj=new retrieve;

if ($_POST) {

$handy_man = array();
$type=$_POST['type'];
$user_name=$_SESSION['username'];
$describe=$_POST['describe'];
$location=$_POST['location'];
if(isset($_POST['type'])){

	$type=$_POST['type'];
}

$obj->post_jobs($user_name,$describe,$location,$type);
	
}





?>