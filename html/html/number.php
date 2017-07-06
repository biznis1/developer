<?php 
namespace ankilib;
// abs(absolute) = Returns the absolute value of number.
Class abc
{
	function abs($gr)
	{
		
 return abs($gr['number']);
 //http://192.168.2.61/dev/html/number.php?number=-5
 }
 function ceil($gr)
 {
	 //ceil : Round fractions up
	 return ceil($gr['value']);
	 //http://192.168.2.61/dev/Mehak/number/number.php?value=3.2
 }
 function floor($gr)
 {
	 return floor($gr['value']);
	 //floor : Round fractions down
}
function round($gr)
{
	if(empty($gr['precision']))$gr['precision']=0;
	if(empty($gr['mode']))$gr['mode']=PHP_ROUND_HALF_UP ;
	return round($gr['number'],$gr['precision'],$gr['mode']);
}
function acos($gr)
{
    return acos($gr['arg']);
}
//http://192.168.2.61/dev/Mehak/number/number.php?arg=-1


function asin($gr)
{
    return asin($gr['arg']);
}
//http://192.168.2.61/dev/Mehak/number/number.php?arg=0.64

function atan($gr)
{
    return atan($gr['arg']);
}
//http://192.168.2.61/dev/Mehak/number/number.php?arg=0.54


function baseConvert($gr)
{
	return base_convert($gr['number'],$gr['frombase'],$gr['tobase']);
}
//http://192.168.2.61/dev/Mehak/number/number.php?number=E196&frombase=16&tobase=8

function cos($gr)
{
    return cos($gr['arg']);
}
//http://192.168.2.61/dev/Mehak/number/number.php?arg=0

function deg2rad($gr)
{
    return deg2rad($gr['number']);
}
//http://192.168.2.61/dev/Mehak/number/number.php?number=45

function exp($gr)
{
    return exp($gr['arg']);
}
//http://192.168.2.61/dev/Mehak/number/number.php?arg=3

function getRandMax($gr)
{
    return getrandmax();
}
//http://192.168.2.61/dev/Mehak/number/number.php
function hypot($gr)
{
    return hypot($gr['x'],$gr['y']);
}
//http://192.168.2.61/dev/Mehak/number/number/number.php?x=3&y=4

function isFinite($gr)
{
    return is_finite($gr['val']);
}
//http://192.168.2.61/dev/Mehak/number/number.php?val=12
function is_infinite($gr)
{
	return is_infinite($gr['value']);
	//http://192.168.2.61/dev/Mehak/number/number.php?value=2
}


function log10($gr)
{
    return log10($gr['arg']);
}
//http://192.168.2.61/dev/Mehak/number/number.php?arg=10

function max($gr)
{
	return max($gr['values']);
}
//http://192.168.2.61/dev/Mehak/number.php?values[]=2&values[]=3&values[]=10

function min($gr)
{
	return min($gr['values']);
}
//http://192.168.2.61/dev/Mehak/number/number.php?values[]=2&values[]=3&values[]=10


function pi($gr)
{
	return pi();
}
//http://192.168.2.61/dev/Mehak/number/number.php

function pow($gr)
{
	return pow($gr['base'],$gr['exp']);
}
//http://192.168.2.61/dev/Mehak/number/number.php?base=2&exp=4
function rad2deg($gr)
{
	return rad2deg($gr['number']);
}
//http://192.168.2.61/dev/Mehak/number/number.php?number=45   
function rand($gr)
{
return  mt_rand($gr['min'] ,$gr['max']);
}
function sin($gr)
{
	return sin($gr['arg'] );
}
//http://192.168.2.61/dev/Mehak/number/number.php?arg=45
function sinh($gr)
{
	return sinh($gr['arg']);

}
//http://192.168.2.61/dev/Mehak/number/number.php?arg=2
function sqrt($gr)
{
	return sqrt($gr['arg']);
}
//http://192.168.2.61/dev/Mehak/number/number.php?arg=2
function tan($gr)
{
	return tan($gr['arg']);
	//http://192.168.2.61/dev/Mehak/number/number.php?arg=30
}
function tanh($gr)
{
	return tanh($gr['arg']);
	//http://192.168.2.61/dev/Mehak/number/number.php?arg=30
}
function bindec($gr)
{
	return bindec($gr['binary_string']); 
}
//http://192.168.2.61/dev/Mehak/number/number.php?binary_string=1010
function decoct($gr)
{
	return decoct($gr['number']);
	
}
//http://192.168.2.61/dev/Mehak/number/number.php?number=97
}
 $a=new abc();
 $gr=$_GET;
echo $a->abs($gr);
 //echo $a->ceil($gr);
// echo $a->floor($gr);
 //echo $a->round($gr);
 //echo $a->acos($gr);
 //echo $a->asin($gr);
 //echo $a->atan($gr);
// echo $a->baseconvert($gr);
// echo $a->cos($gr);
//echo $a->deg2rad($gr);
//echo $a->exp($gr);
//echo $a->getRandMax($gr);
 //echo $a->hypot($gr);
//echo $a-> isFinite($gr); 
//echo $a->is_infinite($gr);
//echo $a->log10($gr);
//echo $a->max($gr);
//echo $a->min($gr);
//echo $a->pi($gr);
//echo $a->pow($gr);
//echo $a->rad2deg($gr);
//echo $a->rand($gr);
//echo $a->sin($gr);
//echo $a->sinh($gr);
//echo $a->sqrt($gr);
//echo $a->tan($gr);
//echo $a->tanh($gr);
//echo $a->bindec($gr);
//echo $a->decoct($gr);