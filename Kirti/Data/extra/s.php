<?php
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
?>