<?php 
//namespace ankilib;
Class abc
{
function strpos($gr)
{
if (!isset($gr['offset']))$gr['offset']=0;
return strpos($gr['haystack'],$gr['needle'],$gr['offset']);
}
}

$a=new abc();
//$gr=array('haystack'=>'kirti','needle'=>'r');
$gr=$_GET;
echo $a->strpos($gr);
