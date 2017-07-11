<?php 
/*
	元字符：大部分都是解决次数的，开头，结尾，边界的
	修饰原子，增强原子功能的
*/
//$preg = '/\?/';
//$str = '?';
//echo preg_match($preg,$str);
//?:匹配0次或1次
$preg = '/\d?/';//匹配0或1个数字
$str = '';
echo preg_match($preg,$str);

$str = '12';
echo preg_match($preg,$str,$match);
var_dump($match);
echo '<hr>';

//+:匹配1次或多次
$preg = '/\d+/';
$str = '';
echo preg_match($preg,$str);

$preg = '/\d+/';
$str = 'abc';
echo preg_match($preg,$str);

$preg = '/\d+/';
$str = '123a456';
echo preg_match($preg,$str,$match);
var_dump($match);
echo '<hr>';

//*:匹配任意次，0,1，多次
$preg = '/\d*/';
$str = 'asdfg';
echo preg_match($preg,$str,$match);
var_dump($match);
echo '<hr>';

//.:匹配除了\n之外的所有单个字符
$preg = '/./';
$str = "\n";//0
$str = '\n';//1
echo preg_match($preg,$str);
echo '<hr>';

//|:匹配分支中的1个
$preg = '/[a|b|c]def/';//adef,bdef,cdef,
$str = 'cdef';
echo preg_match($preg,$str,$match);
var_dump($match);

$preg = '/a|b|cdef/';//a,b,cdef
$str = 'adef';
echo preg_match($preg,$str,$match);
var_dump($match);


