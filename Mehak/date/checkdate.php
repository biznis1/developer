<?php 
namespace ankilib;
Class abc
{
function checkdate($gr)
{
print_r();
return var_dump(checkdate ($gr['month'],$gr['day'],$gr['year']));

}
//http://192.168.2.61/dev/Mehak/date/checkdate.php?month=12&day=30&year=1994

}
$a=new abc();
//$gr=array('haystack'=>'kirti','needle'=>'r');
$gr=$_GET;
echo $a->checkdate($gr);
//echo $a->timezone($gr);
//echo $a->date($gr);




