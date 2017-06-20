<?php 
//namespace ankilib;
Class abc
{
	
	function array_change_key_case($gr)
	{
	    if (!isset($gr['case']))$gr['case']=CASE_UPPER;
        return array_change_key_case($gr['array'],$gr['case']);
	}
	
	//http://192.168.2.61/dev/Mehak/array/array.php?array[FIRst]=2&array[second]=3
	
	
	function array_chunk($gr)
	{
		if (!isset($gr['preservekeys']))$gr['preservekeys']=0;
	    return array_chunk($gr['array'],$gr['size'],$gr['preservekeys']);
	}
	//http://192.168.2.61/dev/Sushant/Arrays.php?array[0]=2&array[1]=3&array[2]=4&array[3]=8&array[4]=6&size=2
	
	
	function array_combine($gr)
	{
	return array_combine($gr['keys'],$gr['values']);
	}
	//http://192.168.2.61/dev/Sushant/Arrays.php?keys[0]=Hi&keys[1]=Hello&values[0]=John&values[1]=Kapil
	
	
    function arrayValues($gr)
    { 
    return array_values($gr['array']);
    }	
	//http://192.168.2.61/dev/Mehak/array/array.php?array[first]=2&array[second]=3&array[third]=4&array[fourth]=8&array[fifth]=6
    

    function count($gr)
    { 
    if (!isset($gr['mode']))$gr['mode']=0;
    return count($gr['array'],$gr['mode']);
    }
    //http://192.168.2.61/dev/Mehak/array/array.php?array[0]=1&array[1]=2&array[2]=3


    function sort($gr)
    {
	if (!isset($gr['sort_flags']))$gr['sort_flags']=0;
    return sort($gr['array'],$gr['sort_flags']);
    }
    //http://192.168.2.61/dev/Mehak/array/array.php?array[0]=4&array[1]=2&array[2]=3


    function arrayreverse($gr) 
    {
	if (!isset($gr['preserve']))$gr['preserve']=0;
	return array_reverse($gr['array'],$gr['preserve']);
    }
//http://192.168.2.61/dev/Mehak/array/array.php?array[0]=3&array[1]=2&array[2]=6



function arraySearch($gr)
{
    if (!isset($gr['strict']))$gr['strict']=0;
	return array_search($gr['needle'],$gr['haystack'],$gr['strict']);
}
//http://192.168.2.61/dev/Mehak/array/array.php?array[needle]=m&array[haystack]=This is my phone.
function arrayflip($gr)
{
	return array_flip($gr['array']);
	
}
//http://192.168.2.61/dev/Mehak/array/array.php?array[red]=a&array[yellow]=b
}
$a=new abc();
$gr=$_GET;
//print_r($a->array_change_key_case($gr));
//print_r($a->array_chunk($gr));
//print_r($a->array_combine($gr));
//print_r($a->arrayValues($gr));
//print_r($a->count($gr));
//print_r($a->sort($gr));
//print_r($a->arrayreverse($gr));
//print_r($a->arraySearch($gr));
print_r($a->arrayflip($gr));