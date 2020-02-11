<?php

require 'direct.php';
if ($_POST){
	


$firstname= strtolower($_POST["name"]);
$lastname= strtolower($_POST["lastname"]);
$username= strtolower($_POST["usr_name"]);
$user_type=strtolower($_POST['type']);
$password= strtolower($_POST["pass"]);
$address=strtolower($_POST["add"]);
$phone=strtolower($_POST["phone"]);
$email=strtolower($_POST["mail"]);}




if($user_type=="service"){

$child = new retrieve;
$child->load($firstname, $lastname,$email,$phone,$username,$password,$address);
}elseif($user_type=='artisan'){
	$babe=new retrieve;
	$babe->art($firstname, $lastname,$email,$phone,$username,$password,$address);
}else{echo '<p>Please select an option</p>';}





?>