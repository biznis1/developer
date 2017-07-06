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
	

	function sup($gr)
	{
$par=array('target'=>'','name'=>'','href'=>'','shape'=>'','coords'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('sup',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/sup.php?val=deepak

		function sub($gr)
	{
$par=array('target'=>'','name'=>'','href'=>'','shape'=>'','coords'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('sub',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/sub.php?val=deepak

	function rt($gr)
	{
$par=array('target'=>'','name'=>'','href'=>'','shape'=>'','coords'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('rt',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/rt.php?val=deepak
	

	function rp($gr)
	{
$par=array('target'=>'','name'=>'','href'=>'','shape'=>'','coords'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('rp',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/rp.php?val=deepak

function ins($gr)
	{
$par=array('name'=>'','datetime'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('ins',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/ins.php?val=ctrl+s

	function i($gr)
	{
$par=array('name'=>'','datetime'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('i',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/i.php?val=ctrl+s

	function code($gr)
	{
$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('code',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/code.php?val=deepak

	function cite($gr)
	{
$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('cite',$gr['val'],$ops);
	}
	//192.168.2.61/dev/html/inline/cite.php?val=deepak

	function var($gr)
	{
$par=array('target'=>'','name'=>'','href'=>'','shape'=>'','coords'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('var',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/var.php?val=deepak

function u($gr)
	{ 
$par=array('target'=>'','name'=>'','href'=>'','shape'=>'');
$ops=array_intersect_key($gr,$par);
return $this->make('u',$gr['val'],$ops );
	}

//http://192.168.2.61/dev/html/inline/u.php?&val=abc

	function time($gr)
	{
$par=array('target'=>'','name'=>'','href'=>'','shape'=>'','coords'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('time',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/time.php?val=10:01

function time($gr)
	{
$par=array('target'=>'','name'=>'','href'=>'','shape'=>'','coords'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('time',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/time.php?val=10:01


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
echo $a->sup($gr);
//echo $a->sub($gr);
//echo $a->rt($gr);
//echo $a->rp($gr);
//echo $a->ins($gr);
//echo $a->i($gr);
//echo $a->code($gr);
//echo $a->cite($gr);
//echo $a->var($gr);
//echo $a->u($gr);
//echo $a->time($gr);
//echo $a->textarea($gr);

//ops[]=array('name'=>'','id'=>'','class'=>'','style'=>'');

 