<?php 
namespace ankilib;
Class abc
{
function abs($gr)
{
    return abs($gr['number']);
}
//http://192.168.2.61/dev/Sushant/number.php?number=-4	


function ceil($gr)
{
    return ceil($gr['value']);
}
//http://192.168.2.61/dev/Sushant/number.php?value=3.2


function floor($gr)
{
    return floor($gr['value']);
}
//http://192.168.2.61/dev/Sushant/number.php?value=3.9

function round($gr)
{
	if(empty($gr['precision']))$gr['precision']=0;
	if(empty($gr['mode']))$gr['mode']=PHP_ROUND_HALF_UP ;
	return round($gr['number'],$gr['precision'],$gr['mode']);
}
//http://192.168.2.61/dev/Sushant/number.php?number=7.7


function acos($gr)
{
    return acos($gr['arg']);
}
//http://192.168.2.61/dev/Sushant/number.php?arg=0.2

function asin($gr)
{
    return asin($gr['arg']);
}
//http://192.168.2.61/dev/Sushant/number.php?arg=0.2

function atan($gr)
{
    return atan($gr['arg']);
}
//http://192.168.2.61/dev/Sushant/number.php?arg=0.2

function baseConvert($gr)
{
	return base_convert($gr['number'],$gr['frombase'],$gr['tobase']);
}
//http://192.168.2.61/dev/Sushant/number.php?number=E196&frombase=16&tobase=8

function cos($gr)
{
    return cos($gr['arg']);
}
//http://192.168.2.61/dev/Sushant/number.php?arg=1

function deg2rad($gr)
{
    return deg2rad($gr['number']);
}
//http://192.168.2.61/dev/Sushant/number.php?number=79

function exp($gr)
{
    return exp($gr['arg']);
}
//http://192.168.2.61/dev/Sushant/number.php?arg=3

function getRandMax($gr)
{
    return getrandmax();
}

function hypot($gr)
{
    return hypot($gr['x'],$gr['y']);
}
//http://192.168.2.61/dev/Sushant/number.php?x=3&y=4

function isFinite($gr)
{
    return is_finite($gr['val']);
}
//http://192.168.2.61/dev/Sushant/number.php?val=12

function log10($gr)
{
    return log10($gr['arg']);
}
//http://192.168.2.61/dev/Sushant/number.php?arg=2

function max($gr)
{
	return max($gr['values']);
}
//http://192.168.2.61/dev/Sushant/number.php?values[]=2&values[]=3&values[]=10

function min($gr)
{
	return min($gr['values']);
}
//http://192.168.2.61/dev/Sushant/number.php?values[]=2&values[]=3&values[]=10


function pi($gr)
{
	return pi();
}
//http://192.168.2.61/dev/Sushant/number.php

function pow($gr)
{
	return pow($gr['base'],$gr['exp']);
}
//http://192.168.2.61/dev/Sushant/number.php?base=2&exp=3






}
$a=new abc();
$gr=$_GET;
//echo $a->abs($gr);
//echo $a->ceil($gr);
//echo $a->floor($gr);
//echo $a->round($gr);
//echo $a->acos($gr);
//echo $a->asin($gr);
//echo $a->atan($gr);
//echo $a->baseConvert($gr);
//echo $a->cos($gr);
//echo $a->deg2rad($gr);
//echo $a->exp($gr);
//echo $a->getRandMax($gr);
//echo $a->hypot($gr);
//echo $a->isFinite($gr);
//echo $a->log10($gr);
//echo $a->max($gr);
//echo $a->min($gr);
//echo $a->pi($gr);
echo $a->pow($gr);


