<?php
namespace anklib;
Class content
{
	function file_get_contents($gr)
	{
		$file = file_get_contents('./file.txt', true);
	}
}

$a=new content();
//$gr=array('haystack'=>'Hi, I am Kirti');
$gr=$_GET;
echo $a->file_get_contents($gr);