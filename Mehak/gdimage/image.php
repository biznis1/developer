<?php 
namespace ankilib;

Class abc
{
	/*function imagecreate($gr)
	{
		$im=@imagecreate($gr['width'] ,$gr['height']);
		return $im;
 }*/
 
	function imagecreate($gr)
	{
		return imagecreate($gr['width'] ,$gr['height']);
		
 }

 function imagecreatetruecolor($gr)
{
	return @imagecreatetruecolor ($gr['width'] , $gr['height'] );
}
 function imagecolorallocate($gr)
 {
	 return imagecolorallocate ($gr['image'] ,$gr['red'] , $gr['green'] , $gr['blue'] );
 }
 
 function imagecreatefromgd2($gr)
 {
	 return imagecreatefromgd2($gr['flename']);
 }
 function imagearc($gr)
 {
return imagearc( $gr['image'] ,$gr['cx'] ,$gr['cy'] ,$gr['width'] ,$gr['height'] ,$gr['start'] ,$gr['end'] ,$gr['color'] );
 
}


function imagebmp($gr)
{
	if(empty($gr['compressed ']))$gr['compressed ']=true;
	return imagebmp ( $gr['image'] , $gr['to'] ,$gr['compressed'] );
}

function imagecolorat($gr)
{
	return imagecolorat ($gr['image'] ,$gr['x'] , $gr['y'] );
}
function imagechar($gr)
{
	return imagechar($gr['image'] , $gr['font'] ,$gr['x'] ,$gr['y'] ,$gr['c'] ,$gr['color'] );
}
function imagegetsize($gr)
{
	 if(empty($gr['imageinfo']))$gr['imageinfo ']=info;
	return getimagesize ( $gr['filename'] ,$gr['imageinfo'] );
}

}
$a=new abc();
$gr=$_GET;
echo $a-> imagecreate($gr);
//echo $a->imagecreatefromgd2($gr);
//echo $a->imagearc($gr);
//echo $a->imagecreatetruecolor($gr);
//echo $a->imagecolorallocate($gr);

