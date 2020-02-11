<?php

require "direct.php";
if($_POST){


	$firstname=strtolower($_POST['fname']);
	$lastname=strtolower(($_POST['lname']));
	$email=strtolower($_POST['email']);
	$phone=strtolower($_POST["usr_number"]);
	$info=strtolower($_POST['info']);

	

}if (trim($firstname)==''||trim($lastname)==''||trim($email)==''||trim($phone)==''){

	$error="<p style='color:red'>Please supply the needed field**</p>";
	header("location:contact_us.php?status=$error");
}else{
	$obj=new retrieve;
	$obj->complaints($firstname,$lastname,$email,$phone,$info);


}


?>




