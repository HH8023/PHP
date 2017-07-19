<?php
/* 
	静态变量
 */
function say()
{
	static $a = 1;
	echo $a,'<br>';
	$a++;
}
say();
say();
say();
say();
say();
echo '<hr>';


/* 
	oop中的static作用：
	1.修饰属性和方法，
	2.静态属性，不能当初普通属性一样，用对象->属性的方式调用
 */
class Test
{
	public static $a = 1;
	
	public static function say()
	{
		echo 'hello';
	}
}
$t = new Test();
// echo $t->a;//报错，注意，不能把static修饰的属性当初普通属性来用，那该怎么搞？

echo Test::$a;//这样玩，类名::属性名
Test::say();//可以,也就是说：静态方法支持不实例化对象调用
echo '<hr>';
$t->say();//也可以
echo '<hr>';



