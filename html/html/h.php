<?php 
namespace ankilib;
Class abc
{
	 function makeTag($name,$val,$ops)
	 {
        $t="<$name ";
        $t.=">".htmlentities($val)."</$name>";
        return $t;
    }
	function text($gr){
		
		$t='';
		$ops=array("type"=>"text");
        $t="<$name ";
        $t.=">".htmlentities($val)."</$name>";
		//return maketag($gr['name'],$gr['val'],$gr['ops']);
	   	
	}
	//http://192.168.2.61/dev/html/html/html.php?name=p&&val=mehak
	
		
	function ops($ops){
		$t='';
		foreach($ops as $k=>$v){
            $t.=$k.'="'.htmlentities($v).'"';
        }
		return $t;
		
	}
   }
	
   $r = "";
 $a=new abc();

$gr=$_GET;
//echo $a->makeTag('p','this is a text',$r);
echo $a->text($gr);



 