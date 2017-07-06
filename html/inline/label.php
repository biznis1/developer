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
	function label($gr)
	{
$par=array('for'=>'','datetime'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('label',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/label.php?val=first%20name&for=first%20name
	
		
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
echo $a->label($gr);

//ops[]=array('name'=>'','id'=>'','class'=>'','style'=>'');

 