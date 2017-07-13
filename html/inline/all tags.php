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


	function strong($gr)
	{
$par=array('target'=>'','name'=>'','href'=>'','shape'=>'','coords'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('strong',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/strong.php?val=deepak

	function small($gr)
	{
$par=array('target'=>'','name'=>'','href'=>'','shape'=>'','coords'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('small',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/small.php?val=deepak

		function samp($gr)
	{
$par=array('target'=>'','name'=>'','href'=>'','shape'=>'','coords'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('samp',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/samp.php?val=deepak
	function s($gr)
	{
$par=array('target'=>'','name'=>'','href'=>'','shape'=>'','coords'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('s',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/a.php?val=deepak

	function rtc($gr)
	{
$par=array('target'=>'','name'=>'','href'=>'','shape'=>'','coords'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('rtc',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/rtc.php?val=deepak

		function q($gr)
	{
$par=array('cite'=>'','datetime'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('q',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/q.php?val=first%20name&cite=www.google.com

	function mark($gr)
	{
$par=array('for'=>'','datetime'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('mark',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/mark.php?val=first%20name


	function a($gr)
	{
$par=array('target'=>'','rel'=>'','href'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('a',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/html/html.php?tagName=p&&val=mehak
	
	function label($gr)
	{
$par=array('for'=>'','datetime'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('label',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/label.php?val=first%20name&for=first%20name

	function kbd($gr)
	{
$par=array('name'=>'','datetime'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('kbd',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/kbd.php?val=ctrl+s

	function em($gr)
	{
$par=array('name'=>'','datetime'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('em',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/em.php?val=ctrl+s

	function dfn($gr)
	{
$par=array('name'=>'','datetime'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('dfn',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/dfn.php?val=abc&datetime

	function del($gr)
	{
$par=array('cite'=>'','datetime'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('del',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/del.php?val=abc&datetime

	function dd($gr)
	{
$par=array('name'=>'','	value'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('dd',$gr['value'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/dd.php?value=deepak

	function data($gr)
	{
$par=array('name'=>'','	value'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('data',$gr['value'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/data.php?value=deepak


	function button($gr)
	{
$par=array('name'=>'','value'=>'','type'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('button',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/button.php?val=deepak&name=submit_button&type=submit&value=primary

	function bdo($gr)
	{
$par=array('name'=>'','id'=>'','class'=>'','dir'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('bdo',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/bdo.php?val=anuja&dir=rtl

	function bdi($gr)
	{
$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('bdi',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/html/html.php?tagName=p&&val=mehak


	function b($gr)
	{

$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
echo 'hello';
return $this->makeTag('b',$gr['val'],$ops);
	}


	function area($gr)
	{

$par=array('title'=>'','shape'=>'','coords'=>'','href'=>'','target'=>'');
$ops=array_intersect_key($gr,$par);
//echo 'hello';
return $this->makeTag('area',$gr['val'],$ops);
	}

	function a($gr)
	{
$par=array('target'=>'','name'=>'','href'=>'','shape'=>'','coords'=>'');
$ops=array_intersect_key($gr,$par);
//echo'google';
return $this->makeTag('a',$gr['val'],$ops);
	}
	//http://192.168.2.61/dev/html/inline/a.php?val=google%20&href=https://www.google.com&target=_blank





	
		
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
//echo $a->strong($gr);
//echo $a->small($gr);
//echo $a->samp($gr);
//echo $a->s($gr);
//echo $a->rtc($gr);
//echo $a->q($gr);
//echo $a->mark($gr);
//echo $a->a($gr); 
//echo $a->label($gr);
//echo $a->kbd($gr);
//echo $a->em($gr);
//echo $a->dfn($gr);
//echo $a->del($gr);
//echo $a->dd($gr);
//echo $a->data($gr);
//echo $a->button($gr);
//echo $a->bdo($gr);
//echo $a->bdi($gr);
//echo $a->b($gr);
//echo $a->area($gr);
//echo $a->a($gr);
//ops[]=array('name'=>'','id'=>'','class'=>'','style'=>'');

 