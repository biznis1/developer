<?php
class xyz
{
	Function count($dir)
	{
		$fi = new FilesystemIterator($dir, FilesystemIterator::SKIP_DOTS);
		return $count = iterator_count($fi);
	}

}

$obj = new xyz;
echo $obj->count('/opt/lampp/htdocs/dev/cdc/www.cdc.org.in');
?>
