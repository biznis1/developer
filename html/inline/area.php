<?php 
//namespace ankilib;
Class abc
{
 function makeTag($name,$val,$ops){
        $t="<$name ";
        $t.=$this->ops($ops);

        $t.=">".htmlentities($val)."</$name>";

        return $t;	
		

    }
	

	function area($gr)
	{

$par=array('title'=>'','shape'=>'','coords'=>'','href'=>'','target'=>'');
$ops=array_intersect_key($gr,$par);
//echo 'hello';
return $this->makeTag('area',$gr['val'],$ops);
	}
	
	function ops($ops){
		$t='';
		foreach($ops as $k=>$v)
		{
            $t.=$k.'="'.htmlentities($v).'"';
        }
		return $t;
		
	}
   }
   //$r = "";
 $a=new abc();
//$r=array("name"=>"test");
$gr=$_GET;
//echo $a->makeTag('p','this is a text',$r);
echo $a->area($gr);

 