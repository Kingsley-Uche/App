<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
$friend="Sola";
$age=45;
$post="How are you doing dear?";
$check=(strpos($post,"dear"));
 if(($age>=40)&&($check==true)){
 		echo("<h3 style='color:green'>post approved<h3>");
 	}else{ echo ("<h3 style='color:red'>Ade has unfriended you.<h3>");}
 
?>
	
</body>
</html>