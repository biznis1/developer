<?php
Class file
{
	Function getFileCount($path) 
	{
		$size = 0;
		$ignore = array('.','..','cgi-bin','.DS_Store');
		$files = scandir($path);
		foreach($files as $t) 
		{
			if(in_array($t, $ignore)) continue;
			if (is_dir(rtrim($path, '/') . '/' . $t)) 
			{
				$size += getFileCount(rtrim($path, '/') . '/' . $t);
			} 
			else 
			{
				$size++;
			}   
		}
		return $size;
	}
}

$obj = new file();
echo $obj->getFileCount('/opt/lampp/htdocs/dev/cdc');