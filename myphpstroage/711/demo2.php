<?php 
/*
	模式修饰符
	s:将.变为可以匹配所有的字符
*/
//s:
$preg = '/./';//匹配所有的字符，不包括\n
$str = "\n";
echo preg_match($preg,$str),'<hr>';

$preg = '/./s';//匹配所有的字符，包括\n
$str = "\n";
echo preg_match($preg,$str);
echo '<hr>';

//i:不区分大小写
$preg = '/a/';
$str = 'A';
echo preg_match($preg,$str),'<hr>';//0

$preg = '/a/i';
$str = 'A';
echo preg_match($preg,$str),'<hr>';

//m:将单行字符串视为多行
$preg = '/^def/';
$str = 'abc
def';//当行字符串
echo preg_match($preg,$str),'<hr>';

$preg = '/^def/m';
$str = 'abc
def';//单行字符串
echo preg_match($preg,$str),'<hr>';//1




