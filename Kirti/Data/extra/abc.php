<?php

namespace anklib;
 

class String 
{
function strpos($gr)
{
if (!isset($gr['offset']))$gr['offset']=0;
return strpos($gr['haystack'],$gr['needle'],$gr['offset']);

 
echo strpos("I love php, I love php too!","php");	
}
strpos();
}
