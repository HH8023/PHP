<?php 
/*
	自定义原子
	[]：匹配[]中的任意一个字符
*/
$preg = '/[abc]def/';//adef,bdef,cdef;
$str = 'adef';//1
$str = 'ddef';//0
echo preg_match($preg,$str);
echo '<hr>';

//[^]：匹配除[]之外的任意字符
$preg = '/[^abc]def/';
$str = 'adef';//0
$str = 'fdef';//1
echo preg_match($preg,$str);

