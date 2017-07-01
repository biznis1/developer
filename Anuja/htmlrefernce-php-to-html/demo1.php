<?php
$dom = new DOMDocument('1.0');//Create new document
$css_text = 'p{color:#ff00ff;}';
$style = $dom->createElement('style', $css_text);//Create new <style> tag with the css tags
$dom->appendChild($style);//Add the style tag to document
echo $dom->saveHTML();
?>