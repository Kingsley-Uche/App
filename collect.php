<?php
require('logz_pro.php');

$obj=new receipt;
$s=$obj->fetch();

print_r($s);

?>