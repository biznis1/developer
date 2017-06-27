<?php 
namespace ankilib;

Class abc
{
	function abs($gr)
	{
		
 return abs($gr['number']);

 }
 function ceil($gr)
 {
	
	 return ceil($gr['value']);

 }
 function floor($gr)
 {
	 return floor($gr['value']);
	
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



function asin($gr)
{
    return asin($gr['arg']);
}

function atan($gr)
{
    return atan($gr['arg']);
}



function baseConvert($gr)
{
	return base_convert($gr['number'],$gr['frombase'],$gr['tobase']);
}


function cos($gr)
{
    return cos($gr['arg']);
}


function deg2rad($gr)
{
    return deg2rad($gr['number']);
}


function exp($gr)
{
    return exp($gr['arg']);
}


function getRandMax($gr)
{
    return getrandmax();
}
function hypot($gr)
{
    return hypot($gr['x'],$gr['y']);
}


function isFinite($gr)
{
    return is_finite($gr['val']);
}

function is_infinite($gr)
{
	return is_infinite($gr['value']);

}


function log10($gr)
{
    return log10($gr['arg']);
}


function max($gr)
{
	return max($gr['values']);
}


function min($gr)
{
	return min($gr['values']);
}



function pi($gr)
{
	return pi();
}


function pow($gr)
{
	return pow($gr['base'],$gr['exp']);
}

function rad2deg($gr)
{
	return rad2deg($gr['number']);
} 
function rand($gr)
{
return  mt_rand($gr['min'] ,$gr['max']);
}
function sin($gr)
{
	return sin($gr['arg'] );
}
function sinh($gr)
{
	return sinh($gr['arg']);

}

function sqrt($gr)
{
	return sqrt($gr['arg']);
}
function tan($gr)
{
	return tan($gr['arg']);

}
function tanh($gr)
{
	return tanh($gr['arg']);
	
	
}
function bindec($gr)
{
	return bindec($gr['binary_string']); 
}
function decoct($gr)
{
	return decoct($gr['number']);
	
}

}
 