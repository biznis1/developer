<?php
class abc
{
	function ceil($gr)
	{
		return ceil($gr['cl']);

	}
	function exp($gr)
	{
		return exp($gr['np']);

	}

    function octdec($gr)
	{
		return octdec($gr['oc']);

	}

    function sqrt($gr)
	{
		return sqrt($gr['sq']);

	}	
	function rad2deg ($gr)
	{
		return rad2deg ($gr['rd']);

	}
	function pi($gr)
	{
		return pi($gr['pi']);

	}	
	function log10($gr)
	{
		return log10($gr['lg']);

	}	
	
	function tan($gr)
	{
		return tan($gr['tn']);

	}	
	

}

$obj = new abc;
$gr = $_GET;

echo $obj->ceil($gr)."<br>";

echo $obj->exp($gr)."<br>";

echo $obj->octdec($gr)."<br>";

echo $obj->sqrt($gr)."<br>";

echo $obj->rad2deg($gr)."<br>";

echo $obj->pi($gr)."<br>";

echo $obj->log10($gr)."<br>";

echo $obj->tan($gr);





