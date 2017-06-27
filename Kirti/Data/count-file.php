
<?php
/*class xyz
{
	Function count($dir)
	{
		$fi = new FilesystemIterator($dir, FilesystemIterator::SKIP_DOTS);
		return $count = iterator_count($fi);
	}

}

$obj = new xyz;
echo $obj->count('/opt/lampp/htdocs/dev/cdc/www.cdc.org.in');

*/

function getFileCount($path) 
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

echo getFileCount('/opt/lampp/htdocs/dev/cdc');

