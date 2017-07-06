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
	

	function textarea($gr)
	{
$par=array('autocomplete'=>'','name'=>'','minlength'=>'','maxlength'=>'','placeholder'=>'','rows'=>'','wrap'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('textarea',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/textarea.php?val=deepak&autocomplete=on&minlength=2&maxlength=5&placeholder=enter%20your%20name
	
		
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
echo $a->textarea($gr);

//ops[]=array('name'=>'','id'=>'','class'=>'','style'=>'');

 