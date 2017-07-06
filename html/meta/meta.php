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
		

    function script($gr)
	{
		$par=array('src'=>'','type'=>''.'charset'=>'','defer'=>'','crossorigin'=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('script',$gr['val'],$ops);
	
	}
	function head($gr)
	{
	$par=array();
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('head',$gr['val'],$ops);
   }
   function link($gr)
   {
   $par=array('href'=>'','rel'=>'' ,'type'=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('link',$gr['val'],$ops);
   
   }
   function meta($gr)
   {
   $par=array('charset'=>'','content'=>'' ,'name'=>'','equivalent','http-equiv'=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('meta',$gr['val'],$ops);
   }
	function title($gr)
	{
	$par=array(''=>'');
   $ops=array_intersect_key($gr,$par);
   return $this->makeTag('title',$gr['val'],$ops);
	}
	
	function ops($ops){
		$t='';
		foreach($ops as $k=>$v)
		{
            $t.=$k.'="'.htmlentities($v).'" ';
        }
		return $t;
		
	}
	
$a=new abc();
$gr=$_GET;
echo $a=>script($gr);
echo $a=>head($gr);
echo $a=>link($gr);
echo $a=>meta($gr);
echo $a=>title($gr);


	