
<?php
//namespace anklib;
class date
{
	function checkdate($m,$d,$y)
	{
	  echo $m.$d.$y;
	  echo "<br>";
		var_dump(checkdate($m,$d,$y));
       
	 echo "<br> <br/>";
	}

	  
//date_add	  
	  
	function date_add()
	{
		$date=date_create("2013-03-15");
date_add($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"Y-m-d");
 echo "<br> <br/>";
}
//simple date
function date()
{
	echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
}
}

$obj = new date;
$obj->checkdate(2,29,2014);
$obj->date_add();
$obj->date();