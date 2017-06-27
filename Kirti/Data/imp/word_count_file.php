<?php

Class words
{
	function file_word_count($gr)
	{
		$file = file_get_contents("file.txt");
		return str_word_count($file);		
	}
}

$a=new words();
$gr=$_GET;
echo $a->file_word_count($gr);
?>