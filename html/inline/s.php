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
	

	function s($gr)
	{
$par=array('target'=>'','name'=>'','href'=>'','shape'=>'','coords'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('s',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/a.php?val=deepak
	
		
	function ops($ops){
		$t='';
		foreach($ops as $k=>$v)
		{
            $t.=$k.'="'.htmlentities($v).'" ';
        }
		return $t;
		
	}
   }
//   $r = "";
 $a=new abc();
//$r=array("name"=>"test");
$gr=$_GET;
//echo $a->makeTag('p','this is a text',$r);
echo $a->s($gr);

//ops[]=array('name'=>'','id'=>'','class'=>'','style'=>'');

 