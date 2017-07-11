<?php 
/*
	特殊的转义符号：
	注意：此处的转义符号是正则中的需要转义的符号，和PHP中的转义符号不是一回事
	\"
	\'
	\*
	\?
	\+
	\.
*/
$preg = '/\?/';//此时'?'才是？
$str = '"?';
echo preg_match($preg,$str,$match);
var_dump($match);
echo '<hr>';

$preg = '/\+/';//?  *  .  都需要转义，否则报错
$str = '1+1';
echo preg_match($preg,$str);
echo '<hr>';

$preg = '/\*/';
$str = "*";
echo preg_match($preg,$str);



