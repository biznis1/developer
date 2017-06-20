<?php

Class words
{
	function strwordcount($gr)
	{
		if (!isset($gr['offset']))$gr['offset']=0;
		return str_word_count($gr['haystack']);
	}
	
	function filewordcount($gr)
	{
		$file = file_get_contents("file.txt");
		return str_word_count($file);		
	}
	
	function glob($gr)
	{
		foreach (glob("file.txt") as $filename) 
		{
		return filesize($filename) . "\n";
		}
	}
}

$a=new words();
//$gr=array('haystack'=>'Hi, I am Kirti');
$gr=$_GET;
echo $a->strwordcount($gr);
echo "<br/> <br/>";
echo $a->filewordcount($gr);
echo "<br/> <br/>";
echo $a->glob($gr);
?>