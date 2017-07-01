<?php
$dom = new DOMDocument('1.0');
$css_text = 'p{color:#ff00ff;}';
$style = $dom->createElement('style', $css_text);//Create new <style> tag with the css tags
$domAttribute = $dom->createAttribute('type');//Create the new attribute 'type'
$domAttribute->value = 'text/css';//Add value to attribute
$style->appendChild($domAttribute);//Add the attribute to the style tag
$dom->appendChild($style);//Add the style tag to document
echo $dom->saveHTML(); 
?>