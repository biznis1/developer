<?php 
namespace ankilib;
Class abc
{
	 function makeTag($name,$val,$ops)
	 {
        $t="<$name ";
       $t='';
		foreach($ops as $k=>$v){
            $t.=$k.'="'.htmlentities($v).'"';
        }
		return $t;
		
	}
        $t.=">".htmlentities($val)."</$name>";
        return $t;
    }
	
	
 $a=new abc();
$r=array("name"=>"test");
echo $a->makeTag('p','this is a text',$r);
echo $a->text($gr);