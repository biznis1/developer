<?php 
//namespace ankilib;
Class abc
{

	function make($attribute,$val,$ops)
	{
		$a="<$attribute";

		$a.=$this->ops($ops);

        $a.=">".htmlentities($val)."</$attribute>";

        return $t;


 function makeTag($name,$val,$ops){


        $t="<$name ";

      
        $t.=$this->ops($ops);

        $t.=">".htmlentities($val)."</$name>";

        return $t;	
		

    }

	}
	

	function u($gr)
	{
$par=array('target'=>'','name'=>'','href'=>'','shape'=>'');
$ops=array_intersect_key($gr,$par);
//echo 'hello';
//echo $a->b($gr);
return $this->makeTag('u',$gr['val'],$ops);
//return $this->makeTag('b',$gr['val'],$ops);
//return $this->makeTag('b',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/u.php?val=deepak
	

		function b($gr)	
	{

$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
return $this->make('b',$gr['val'],$ops);
	}
		
	function ops($ops)
	{
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
echo $a->u($gr);
//echo $a->b($gr);
//ops[]=array('name'=>'','id'=>'','class'=>'','style'=>'');

 