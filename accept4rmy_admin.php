<?php session_start();
if($_POST){
require "logz_pro.php";
$obj=new receipt;
$username=trim(strtolower($_POST['admin']));
$password=trim(strtolower($_POST['password']));

$obj->admin($username,$password);
}


?>