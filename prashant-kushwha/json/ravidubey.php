<?php
include("gstr1_2_decoding.php");
include("link.php");
foreach($ar as $k=>$r)
{
	
	$rar1[]=$k;
	$rar2[]=$r;
	
}
print_r($rar1);

for($i=0;$i<count($rar1);$i++)
{
	$sql="CREATE TABLE $rar1[$i] (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY)";
	$conn->query($sql);
	foreach($rar2[$i] as $k=>$r)
	{
		$sql="ALTER TABLE $rar1[$i] ADD $k varchar(255)";
		$conn->query($sql);
		$rar3[]=$k;
	}
}
print_r($rar3);
?>