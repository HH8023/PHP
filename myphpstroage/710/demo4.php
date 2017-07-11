<?php 
/*
	非打印字符通常意义上的转义符号
	\f  \n  \r ...
*/
$preg = '/\n/';
$str = 'abc
def';
echo preg_match($preg,$str);
echo '<hr>';

$preg = '/\n\r/';
$str = 'abc\n\rdef';//单引号不能转义其他字符
echo preg_match($preg,$str);
$str = "abc\n\rdef";
echo preg_match($preg,$str);


