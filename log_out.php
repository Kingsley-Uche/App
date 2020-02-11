<?php
session_start();
	session_destroy();

if($_GET['err']){
	$error="a";
header("location:log.php?err=$error");
}else{
	header("location:log.php");
}


?>