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
	function p($gr)
	{
$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
$ops=array_intersect_key($gr,$par);
return $this->makeTag('p',$gr['val'],$ops);
	}
	function h1($gr)
	{
		$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('h1',$gr['val'],$ops);
	}
	function body($gr)
	{
		$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('body',$gr['val'],$ops);
	
	}
	//http://192.168.2.61/dev/html/html/html.php?val=Proud%20to%20serve%20Who%27s%20Who%20of%20India&id=business&name=parpatganj
	
		function pre($gr)
			{
		$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('pre',$gr['val'],$ops);
	
	      }
		  //http://192.168.2.61/dev/html/html/html.php?val=Text%20in%20a%20pre%20element%20is%20displayed%20in%20a%20fixed-width%20font,%20and%20it%20preserves%20both%20spaces%20and%20line%20breaks&id=business&name=parpatganj&cite=cite=https://en.wikiquote.org/wiki/Marie_Curie
		  function header($gr)
		  {
			  $par=array('name'=>'','id'=>'','class'=>'','style'=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('header',$gr['val'],$ops);
		  }
		  
			function address($gr)
			{
				$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('adddress',$gr['val'],$ops);
			}
			function audio($gr)
			{
				$par=array('name'=>'','id'=>'','class'=>'','src'=>'','volume'=>'','style'=>'');
      $ops=array_intersect_key($gr,$par);
      return $this->makeTag('audio',$gr['val'],$ops);
			}
			
			
			function article($gr)
			{
				$par=array('name'=>'','id'=>'','class'=>'','src'=>'','volume'=>'','style'=>'');
      $ops=array_intersect_key($gr,$par);
      return $this->makeTag('article',$gr['val'],$ops);
			}
			
			function blockquote($gr)
			{
				$par=array('name'=>'','id'=>'','class'=>'','src'=>'','volume'=>'','style'=>'','cite'=>'');
      $ops=array_intersect_key($gr,$par);
      return $this->makeTag('blockquote',$gr['val'],$ops);
			}
		//http://192.168.2.61/dev/html/html/html.php?val=For%2050%20years,%20WWF%20has%20been%20protecting%20the%20future%20of%20nature.%20The%20world%27s%20leading%20conservation%20organization,%20WWF%20works%20in%20100%20countries%20and%20is%20supported%20by%201.2%20million%20members%20in%20the%20United%20States%20and%20close%20to%205%20million%20globally.&id=business&name=parpatganj&cite=cite=https://en.wikiquote.org/wiki/Marie_Curie	
	
	function caption($gr)
			{
				$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('caption',$gr['val'],$ops);
			}
			//http://192.168.2.61/dev/html/html/html.php?val=The%20Beatles
			
			function div($gr)
			{
				$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('div',$gr['val'],$ops);
			}
			//http://192.168.2.61/dev/html/html/html.php?val=mehak&class=one&style=color:green;background-color:green
			function datalist($gr)
			{
				$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('datalist',$gr['li'],$ops);
	
			}	
			function footer($gr)
			{
				$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('footer',$gr['val'],$ops);
			}
	//http://192.168.2.61/dev/html/html/html.php?val=HTML%20Reference%20-%20A%20free%20reference%20to%20all%20HTML5%20elements%20and%20attributes&id=tar
	function legend($gr)
	{
		$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('legend',$gr['val'],$ops);
   
	}
	
	function section($gr)
	{
		$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('section',$gr['val'],$ops);
	}
	function form($gr)
	{
		
		$par=array('name'=>'','id'=>'','class'=>'','style'=>'','action'=>'','method'=>'','target'=>'','autocomplete'=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('form',$gr['action'],$ops);
	}
	//http://192.168.2.61/dev/html/html/html.php?action=/contact&method=post&autocomplete=on
	function nav($gr)
	{
		
		$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('nav',$gr['val'],$ops);
	}
	function optgroup($gr)
	{
	
		$par=array('name'=>'','id'=>'','class'=>'','style'=>'','label'=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('optgroup',$gr['label'],$ops);	
	}
	//http://192.168.2.61/dev/html/html/html.php?label=south%20africa
	
	function progress($gr)
	{
		$par=array('name'=>'','id'=>'','class'=>'','style'=>'','value'=>'','max'=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('progress',$gr['max'],$ops);	
	}
	//http://192.168.2.61/dev/html/html/html.php?val=0.7&max=1
	function option($gr)
	{
		
		
	}
	function select($gr)
	{
		$par=array('name'=>'','id'=>'','class'=>'','style'=>'','value'=>'','max'=>'');
		$ops=array_intersect_key($gr,$par);
  
   return $this->maketag('select',$gr['name'],$ops);	
	}
		//http://192.168.2.61/dev/html/html/html.php?name=countries
	function summary($gr)
	{
		$par=array('name'=>'','id'=>'','class'=>'','style'=>'','value'=>'','max'=>'');
		$ops=array_intersect_key($gr,$par);
  
        return $this->maketag('summary',$gr['name'],$ops);
	}		
	function ul($gr)
	{
		$par=array('name'=>'','id'=>'','class'=>'','style'=>'','value'=>'','max'=>'');
		$ops=array_intersect_key($gr,$par);
		 return $this->maketag('ul',$gr['val'],$ops);
	
	}
	
	function video($gr)
	{
	  $par=array('name'=>'','id'=>'','muted'=>'','poster'=>'','preload'=>'','played'=>'','src'=>'','height'=>'','width'=>'','autoplay'=>'','crossorigin'=>'');
		$ops=array_intersect_key($gr,$par);
		 return $this->maketag('video',$gr['val'],$ops);
		
	}
		
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
//echo $a->p($gr);
//echo $a->h1($gr);
//echo  $a->body($gr);
//echo $a->pre($gr);
//echo $a->header($gr);
//echo $a->address($gr);
//echo $a->audio($gr);
//echo $a->blockquote($gr);
//echo $a->caption($gr);
//echo $a->datalist($gr);
//echo $a->div($gr);
// echo $a->footer($gr);
// echo $a->legend($gr);
//echo $a->section($gr);
//ops[]=array('name'=>'','id'=>'','class'=>'','style'=>'');
//echo $a->form($gr);
//echo $a->nav($gr);
//echo $a->optgroup($gr);
//echo $a->progress($gr);
//echo $a->option($gr);
echo $a->select($gr);
//echo $a->summary($gr);
//echo $a->ul($gr);
//echo $a->video($gr);

 
