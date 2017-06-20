<?php
class abc
{
	function countFolder($dir) 
{
	return (count(scandir($dir)) - 2);	
}
}

$obj=new abc;
$obj->countFolder($dir);
?>