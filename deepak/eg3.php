<?php 
namespace ankilib;
Class abc
{
 function makeTag($name,$val,$ops){

        $t="<$tagname ";

        foreach($ops as $k=>$v){

            $t.=$k.'="'.htmlentities($v).'"';

        }

        $t.=">".htmlentities($val)."</$tagname>";

        return $t;

    }
	function p($gr){
$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
return makeTag($gr['tagName'],$gr['val'],$ops);
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
//   $r = "";
 $a=new abc();
//$r=array("name"=>"test");
$gr=$_GET;
//echo $a->makeTag('p','this is a text',$r);
echo $a->p($gr);



 