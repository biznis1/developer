<?php 
namespace ankilib;
Class abc
{
	 function makeTag($name,$val,$ops)
	 {
        $t="<$name ";
       $t.=ops($ops);
        $t.=">".htmlentities($val)."</$name>";
        return $t;
    }
	function text($gr){
		
		$t='';
		$ops=array("type"=>'text');
		
		return maketag($gr['name'],$gr['val']);
		
	}
	function ops($ops){
		$t='';
		foreach($ops as $k=>$v){
            $t.=$k.'="'.htmlentities($v).'"';
        }
		return $t;
		
	}
   }
 $a=new abc();
//$r=array("name"=>"test");
//echo $a->makeTag('p','this is a text',$r);
$gr=$_GET;
 echo $a->maketag($gr);
 