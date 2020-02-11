<?php
//step 1  for get;
$cSession= curl_init();
//step 2
curl_setopt($cSession, CURLOPT_URL, "http://www.google.com/search?q=jump");
curl_setopt($cSession, CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession, CURLOPT_HEADER,false);
$result=curl_exec($cSession);
curl_close($cSession);
echo $result;



?>

<?php

$ch=curl_init();

curl_setopt($ch, CURLOPT_URL, "localhost/my_web_app/log_pros.php")
curl_setopt($ch, CURLOPT_POST,true);
$post_fields=['user_name'=>"Jelar",pwd]




?>