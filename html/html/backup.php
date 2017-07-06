<?php 
namespace ankilib;

Class abc
{
	 function makeTag($name,$val,$ops){
        $t="<$name ";

        foreach($ops as $k=>$v){

           $t.=$k.'="'.htmlentities($v).'"';

        }

       $t.=">".htmlentities($val)."</$name>";

        return $t;

    }
   }
 
 $a=new abc();
 $r=array("name"=>"test");


//http://localhost/dev/html/html/demo.php?name=p&text=this%20is%20a%20text&ops[]=%22type%22=%3E%22text%22,%22id%22=%3E3
//192.168.2.61/dev/html/html/demo.php?name=p&text=this%20is%20a%20text&ops[]="type"=>"text","id"=>3

$gr=$_GET;
 echo $a->makeTag($gr['name'],$gr['text'],$gr['ops']);
//print_r($ops);
