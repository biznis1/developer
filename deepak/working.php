<?php 
namespace ankilib;

Class abc
{
	 function makeTag($name,$val){

        $t="<$name ";

        foreach($p as $k=>$v){

            $t.=$k.'="'.htmlentities($v).'"';

        }

        $t.=">".htmlentities($val)."</$name>";

        return $t;

    }

    function p($gr)
    {
		$par=array('name'=>'','id'=>'','class'=>'','style'=>'');
		$ops=array_intersect_key($gr,$par);
		return makeTag($gr['tagName'],$gr['val']);
}
   }
 
 $a=new abc();
 $gr=$_GET;
 //$r=array("name"=>"test");
 echo $a->makeTag('p','this is a text');
 echo $a->p($gr);
 