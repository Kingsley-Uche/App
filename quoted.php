<?php session_start();

If($_POST){
	If($_POST['code']){
		require "logz_pro.php";
	$username=$_SESSION['username'];
		$obj=new receipt;
		$obj->view_quotes($username);
		
	}

}else{header('location:log_out.php');}



?>