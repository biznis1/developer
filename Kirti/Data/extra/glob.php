<?php

Class abcd
{
	function glob($gr)
	{
		foreach (glob("file.txt") as $filename) 
		{
		return "$filename size " . filesize($filename) . "\n";
		}
	}
}

$a=new abcd();
//$gr=array('haystack'=>'Hi, I am Kirti');
$gr=$_GET;
echo $a->glob($gr);
