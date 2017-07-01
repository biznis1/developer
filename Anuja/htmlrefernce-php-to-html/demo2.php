<?php
$dom = new DOMDocument('1.0');
$br = $dom->createElement('br');//Create new <br> tag
$dom->appendChild($br);//Add the <br> tag to document
echo $dom->saveHTML(); 
?>