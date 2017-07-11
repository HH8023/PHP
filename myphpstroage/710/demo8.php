<?php 
/*
	元字符
	{n}
	{n,}
	{n,m}
*/
//{n}:匹配正好N个前面的原子
$preg = '/\d{3}/';
$str = '12a3456';
echo preg_match($preg,$str,$match);
var_dump($match);

