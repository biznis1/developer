<?php
$arr="prasHant";
preg_match_all('/[A-Z]/',$arr,$arr1,PREG_OFFSET_CAPTURE);
foreach($arr1[0][0] as $k=>$v)
{
	$letter[]=$v;
	
}
$letter1=$letter[0];
$index=$letter[1];
echo $letter1;
echo $index;

?>