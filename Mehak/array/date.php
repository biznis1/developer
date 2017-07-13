<?php 
namespace ankilib;
Class abc
{
function date($gr)
{
	if(!isset($gr['[timestamp']))$gr['timestamp'] = time();
    return date($gr['format'],$gr['timestamp']);
}
//http://192.168.2.61/dev/Sushant/date.php?format=d/m/Y

function mktime($gr)
{
    if(empty($gr['hour']))$gr['hour']=date("H");
    if(empty($gr['minute']))$gr['minute']=date("i");
    if(empty($gr['second']))$gr['second']=date("s");
    if(empty($gr['month']))$gr['month']=date("n");
    if(empty($gr['day']))$gr['day']=date("j");
    if(empty($gr['year']))$gr['year']=date("Y");
	//return date("M-d-Y",mktime($gr['hour'],$gr['minute'],$gr['second'],$gr['month'],$gr['day'],$gr['year']));
    return date("l",mktime($gr['hour'],$gr['minute'],$gr['second'],$gr['month'],$gr['day'],$gr['year']));
	
}
//http://192.168.2.61/dev/Sushant/date.php?hour=0&&minute=0&&second=0&&month=12&&day=36&&year=2001


function getdate($gr)
{
	if(!isset($gr['[timestamp']))$gr['timestamp'] = time();
	return getdate($gr['timestamp']);	
}
//http://192.168.2.61/dev/Sushant/date.php?


function gmmktime($gr)
{
    if(empty($gr['hour']))$gr['hour']=gmdate("H");
    if(empty($gr['minute']))$gr['minute']=gmdate("i");
    if(empty($gr['second']))$gr['second']=gmdate("s");
    if(empty($gr['month']))$gr['month']=gmdate("n");
    if(empty($gr['day']))$gr['day']=gmdate("j");
    if(empty($gr['year']))$gr['year']=gmdate("Y");
    return date("l",gmmktime($gr['hour'],$gr['minute'],$gr['second'],$gr['month'],$gr['day'],$gr['year']));
}
//http://192.168.2.61/dev/Sushant/date.php?hour=0&&minute=0&&second=0&&month=6&&day=3&&year=1994


function datecreate()
{     
    if(empty($gr['time']))$gr['time']=date("d/m/Y"); 
    if(empty($gr['timezone']))$gr['timezone']=timezone_open("Asia/Kolkata");	  
	return date_create($gr['time'],$gr['timezone']);
}
//http://192.168.2.61/dev/Mehak/mktime/dt.php/mk.php?hour=0&&minute=0&&second=0&&month=12&&day=12&&year=2017


function idate($gr)
{   
      if(empty($gr['timestamp']))$gr['timestamp']=time();
	return idate($gr['format'],$gr['timestamp']);
	
}
//http://192.168.2.61/dev/Mehak/mktime/dt.php/mk.php?format=Y
function checkdate($gr)
{
	return var_dump(checkdate($gr['month'],$gr['day'],$gr['year']));
}
//http://192.168.2.61/dev/Mehak/mktime/dt.php/mk.php?hour=0&&minute=0&&second=0&&month=12&&day=12&&year=2017
}
$a=new abc();
$gr=$_GET;

//echo $a->date($gr);
echo $a->mktime($gr);
//print_r(getdate());
//echo $a->datecreate($gr);
//echo $a->gmmktime($gr);
//echo $a->datecreate($gr);
//echo $a->idate($gr);
//echo $a->checkdate($gr);
