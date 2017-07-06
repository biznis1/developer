<?php 
namespace ankilib;
Class abc
{
	 function makeTag($TagName,$val,$ops)
	 {
        $t="<".$gr['TagName']." ";
        $t.=">".htmlentities($gr['val'])."</".$gr['TagName'].">";
      return $t;
    }
	function text($gr){
		
		$t='';
		$ops=array("type"=>'text');
		return makeTag
    
	}
	function ops($ops){
		$t='';
		foreach($gr['ops'] as $k=>$v){
            $t.=$k.'="'.htmlentities($v).'"';
        }
		return $t;
		
	}
   }
   $r = "";
 $a=new abc();
//$r=array("TagName"=>"test");
$gr=$_GET;
//echo $a->makeTag('p','this is a text',$r);
echo $a->text($gr);
////192.168.2.61/dev/html/html/tag.php?name=p&text=this%20is%20a%20text&ops[]="type"=>"text","id"=>3