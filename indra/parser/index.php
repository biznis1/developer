<?php 
include('ganon.php');





 // Parse the google code website into a DOM


$html = file_get_dom('http://www.deccanchronicle.com/');
echo $html('div.navBar', 0)->parent->getPlainText();

