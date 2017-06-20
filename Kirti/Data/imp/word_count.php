<?php

Class words
{
	function str_word_count($gr)
	{
		if (!isset($gr['offset']))$gr['offset']=0;
		return str_word_count($gr['haystack']);
	}
}

$a=new words();
//$gr=array('haystack'=>'Hi, I am Kirti');
$gr=$_GET;
echo $a->str_word_count($gr);
?>