<?php session_start();
//This page picks information about profile  pictures and passes them ro the upload function
if (isset($_POST['send'])&&($_SESSION['user'])){
	//print_r($_FILES);
	$user=$_SESSION['username'];
	$type=$_SESSION['type'];
	$filetype= ($_FILES)['sent']['type'];
	$filename=strtolower(($_FILES)['sent']['name']);
	$ext=explode(".",$filename);
	$prf=$user.$ext;
	$filesize=($_FILES)['sent']['size'];
	$error=($_FILES)['sent']['error'];
	$acceptable_format=array('image/jpg','image/png','image/jpeg','application/pdf');
	$tmpname=($_FILES)['sent']['tmp_name'];
	$path="profile_pics/".$prf;
	if(!in_array($filetype, $acceptable_format)){
		$_SESSION['msg']="<div>file type is not supported. Please upload a picture</div>";
		header('location:dash.php');
	}else if($type=='artisan'){
		move_uploaded_file($tmpname, $path);
		require "direct.php";
		$obj= new retrieve;
		$obj->profile_picture($user,$path);
	}else{   move_uploaded_file($tmpname, $path);
		require "direct.php";
		$obj= new retrieve;
		$obj->profile_picture2($user,$path); }
	;
}else{ echo'not found';}

?>