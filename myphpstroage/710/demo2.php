<?php  
/*
	原子：正则的核心，表达式的部分
	分类
*/
//普通字符  a~z  A~Z   0~9
$preg = '/a/';
$str = 'a';
echo preg_match($preg,$str,$match);
var_dump($match);
echo '<hr>';

//数字
$str = '11';
$preg = '/11/';
echo preg_match($preg,$str),'<br>';

//大小写混合
$preg = '/A/';
$str = 'a';
//$str = 'A';
echo preg_match($preg,$str);//0,注意：区分大小写

