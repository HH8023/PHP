<?php 
/*
	通用字符
	\d
	\D
	\s
	\S
	\w
	\W
*/
//\d：数组0-9
$preg = '/\d/';
$str = '123';
echo preg_match($preg,$str,$match);
var_dump($match);
echo '<hr>';

//\D:除了数字
$preg = '/\D/';
$str = '$';
echo preg_match($preg,$str);
echo '<hr>';

//\s:匹配所有的空白字符
$preg = '/\s/';
$str = '\n\r\f';//0 因为单引号不能转义
$str = "\n\r\f";
echo preg_match($preg,$str);
echo '<hr>';

//\S:匹配所有非空白字符
$preg = '/\S/';
$str = 'asdf';
echo preg_match($preg,$str);
echo '<hr>';

//\w:匹配字母，数字，下划线
$preg = '/\w/';
$str = '_';//1
$str = '$';//0
echo preg_match($preg,$str);
echo '<hr>';

//\W:匹配除字母，数字，下划线之外的所有
$preg = '/\W/';
$str = ' ';//1
$str = '\n\r';//1
echo preg_match($preg,$str,$match);
var_dump($match);

