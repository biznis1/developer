<?php 
namespace ankilib;
// abs(absolute) = Returns the absolute value of number.
Class abc
{
	function abs($gr)
	{
		
 return abs($gr['number']);
 //http://192.168.2.61/dev/Mehak/number/number.php?number=-5
 }
}
 
//http://192.168.2.61/dev/Mehak/number/number.php?binary_string=1010
  $a=new abc();
 $gr=$_GET;
echo $a->abs($gr);
?>