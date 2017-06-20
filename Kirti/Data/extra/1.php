<?php
namespace anklib;

Class ABC
{
function strpos_array($haystack, $needles) 
{
    if ( is_array($needles) ) 
	{
        foreach ($needles as $str) 
		{
            if ( is_array($str) ) 
			{
                $pos = strpos_array($haystack, $str);
            } 
			else 
			{
                $pos = strpos($haystack, $str);
            }
            if ($pos !== FALSE) 
			{
                return $pos;
            }
        }
    } 
	else 
	{
        return strpos($haystack, $needles);
    }
}

// Test
	echo strpos_array('This is a test', array('test', 'drive')); // Output is 10

}

obj=new ABC;
ob->ABC('Kirti','i');

?>