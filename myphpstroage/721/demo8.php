<?php 
/*
	__FUNCTION__
	oop中的魔术常量
	__MOETHOD__
	__CLASS__
	__NAMESPACE__
*/
function say()
{
	echo __FUNCTION__,'<hr>';
}
say();//返回所在函数的函数名,在函数内部使用

class Test
{
	public static $className = __CLASS__.'<br>';
	public static function say()
	{
		echo __METHOD__,'<hr>';
	}
}
echo Test::$className;
echo Test::say();
$t = new Test();
$t->say();
echo '<hr>';

var_dump(__NAMESPACE__);//此时不在任意的命名空间中，返回'',表示全局空间
