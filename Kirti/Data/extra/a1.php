<?php
namespace anklib;

class ABC
{
function strpos()
{
	$mystring = 'abc';
	$findme   = 'a';
	$pos = strpos($mystring, $findme);

	if ($pos === false) 
	{
		echo "The string '$findme' was not found in the string '$mystring'";
	} 
	else 
	{
		echo "The string '$findme' was found in the string '$mystring'";
		echo " and exists at position $pos";
	}
}

function strstr()
{
	$email  = 'name@example.com';
	$domain = strstr($email, '@');
	echo $domain; // prints @example.com
	echo "<br/>";
	$user = strstr($email, '@', true); // As of PHP 5.3.0
	echo $user; // prints name
}

function strtolower()
{
	$str = "Mary Had A Little Lamb and She LOVED It So";
	$str = strtolower($str);
	echo $str; // Prints mary had a little lamb and she loved it so
}

function strtoupper()
{
	$str = "Mary Had A Little Lamb and She LOVED It So";
	$str = strtoupper($str);
	echo $str; // Prints MARY HAD A LITTLE LAMB AND SHE LOVED IT SO
}

}

$obj=new ABC;
echo "strpos<br/>";
$obj->strpos();
echo "<br/><br/>";
echo "strstr<br/>";
$obj->strstr();
echo "<br/><br/>";
echo "strtolower<br/>";
$obj->strtolower();
echo "<br/><br/>";
echo "strtoupper<br/>";
$obj->strtoupper();



?>
 