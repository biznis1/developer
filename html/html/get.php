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

        echo $t;

    }
   }
 $nam = $_GET['name'];
 $val = $_GET['val'];
 $a=new abc();
 $r=array("name"=>"test");
 $a->makeTag($nam,$val,$r);
 $gr=$_GET;

 ?>