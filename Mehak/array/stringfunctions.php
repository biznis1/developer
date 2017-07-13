<?php 
namespace ankilib;
Class abc
{
function strpos($gr)
{
if (!isset($gr['offset']))$gr['offset']=0;
return strpos($gr['haystack'],$gr['needle'],$gr['offset']);
}

function strlen($gr)
{
	return strlen($gr['string']);
}

function strcmp($gr)
{
	return strcmp($gr['str1'],$gr['str2']);
}

function addSlashes($gr)
{
	return addslashes($gr['string']);
}

function bin2hex($gr)
{
	return bin2hex($gr['string']);
}

function chr($gr)
{
	return chr($gr['ascii']);
}

function countChars($gr)
{
	if (!isset($gr['mode']))$gr['mode']=0;
	return count_chars($gr['string'],$gr['mode']);
}

function explode($gr)
{
	if (!isset($gr['limit']))$gr['limit']=0;
	return explode($gr['delimiter'],$gr['string'],$gr['limit']);
}

function implode($gr)
{
	return implode($gr['separator'],$gr['array']);
}

function lcfirst($gr)
{
	return lcfirst($gr['string']);
}

function ltrim($gr)
{
	return ltrim($gr['string'],$gr['charactermask']);
}

function md5($gr)
{
	if (!isset($gr['rawoutput']))$gr['rawoutput']=0;
	return md5($gr['string'],$gr['rawoutput']);
}

function metaphone($gr)
{
	if (!isset($gr['phonemes']))$gr['phonemes']=0;
	return metaphone($gr['string'],$gr['phonemes']);
}

function numberformat($gr)
{
	if (!isset($gr['decimals']))$gr['decimals']=0;
	if (!isset($gr['decpoint']))$gr['decpoint']='.';
	if (!isset($gr['thousansep']))$gr['thousansep']=',';
	return number_format($gr['number'],$gr['decimals'],$gr['decpoint'],$gr['thousansep']);
}

function ord($gr)
{
	return ord($gr['string']);
}

function quotemeta($gr)
{
	return quotemeta($gr['string']);
}

function rtrim($gr)
{
	return rtrim($gr['string'],$gr['charactermask']);
}

function setlocale($gr)
{
	return setlocale($gr['category'],$gr['locale']);
}

function sha1($gr)
{
	if (!isset($gr['rawoutput']))$gr['rawoutput']=0;
	return sha1($gr['string'],$gr['rawoutput']);
}

function similarText($gr)
{
	return similar_text($gr['first'],$gr['second'],$gr['percent']);
}

function soundex($gr)
{
	return soundex($gr['string']);
}

function strReplace($gr)
{
	return str_ireplace($gr['search'],$gr['replace'],$gr['subject'],$gr['count']);
}

function strRepeat($gr)
{
	return str_repeat($gr['string'],$gr['multiplier']);
}

function strShuffle($gr)
{
	return str_shuffle($gr['string']);
}

function strSplit($gr)
{
	if (!isset($gr['splitlength']))$gr['splitlength']=1;
	return str_split($gr['string'],$gr['splitlength']);
}

function strWordCount($gr)
{
	if (!isset($gr['format']))$gr['format']=0;
	if (!isset($gr['charlist']))$gr['charlist']=0;
	return str_word_count($gr['string'],$gr['format'],$gr['charlist']);
}

function strcasecmp($gr)
{
	return strcasecmp($gr['str1'],$gr['str2']);
}

function strtolower($gr)
{
	return strtolower($gr['string']);
}

function strtoupper($gr)
{
	return strtoupper($gr['string']);
}

function substrCount($gr)
{
	return substr_count($gr['haystack'],$gr['needle'],$gr['offset'],$gr['length']);
}

function substrReplace($gr)
{
	if (!isset($gr['length']))$gr['length']=10;
	return substr_replace($gr['string'],$gr['replacement'],$gr['start'],$gr['length']);
}

function substr($gr)
{
	if (!isset($gr['length']))$gr['length']=10;
	return substr($gr['string'],$gr['start'],$gr['length']);
}

function trim($gr)
{
	return trim($gr['string'],$gr['charlist']);
}

function ucfirst($gr)
{
	return ucfirst($gr['string']);
}

function ucwords($gr)
{
	return ucwords($gr['string']);
}
}
