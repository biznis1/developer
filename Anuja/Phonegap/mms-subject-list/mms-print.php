<?php
header('Access-Control-Allow-Origin: *'); 
$myObj['name'] = "John";
$myObj['code'] = 30;
$myObj['priority'] = "100";

$myJSON = json_encode($myObj,1);
//print_r($myObj);
 echo $myJSON;
?>