<?php
if($_POST){
	require 'logz_pro.php';
	$k=$_POST['pull'];
	if($k=='cust'){
$obj=new receipt;
$else= json_encode($obj->fetch_cust());
print_r($else);

}else if($k=="artisan"){

	$obj=new receipt;
	$next=json_encode($obj->fetch_art());
	print_r($next);
}
}



?>