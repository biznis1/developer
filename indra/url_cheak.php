<?php
function cheakUrl($url){
	$f=fopen("$url","r");
	$r=fread($f,1000);
	fclose($f);
	if(strlen($r)>0) {
	return "Url valid";
	}
	else {
	return "Url not valid";
	}
}
echo cheakUrl("http://epaperbeta.timesofindia.com/index.aspx?eid=31808&dt=20170619");
