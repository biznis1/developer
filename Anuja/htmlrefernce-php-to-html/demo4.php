<?php
$dom = new DOMDocument('1.0');
$p_text = 'This is a paragraph.';
$p = $dom->createElement('p', $p_text);//Create new <p> tag with text
$domAttribute = $dom->createAttribute('id');//Create the new attribute 'id'
$domAttribute->value = 'description';//Add value to attribute
$p->appendChild($domAttribute);//Add the attribute to the p tag
$dom->appendChild($p);//Add the p tag to document
echo $dom->saveHTML(); 
?>