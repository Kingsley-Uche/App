<?php
class conn{
	public $connect;

function __construct(){$hostname="local host";$username="root";$password="";$db="kamma_solutions";
$this->$connect=new Mysqli($hostname,$username,$password,$db);
}
function auth($username,$password){

	$sql="SELECT* FROM "
}
}

?