<?php
/* 
	方法重载：
	__call():当普通方法不存在或者不可见的时候，自动调用
	__callStatic()
 */
/* 
	__call()
 */
class Test
{
	
}
$t = new Test();
// $t->say();报错  Uncaught Error: Call to undefined method Test::say() in E:\xampp\htdocs\php190\lesson26\demo1.php:15 Stack trace: #0 {main} thrown in E:\xampp\htdocs\php190\lesson26\demo1.php on line 15

class T
{
	public function __call($name, $array)
	{
		echo $name, '方法不存在';
	}
	
	protected function say()
	{
		echo '123';
	}
}
$t = new T();
$t->say();
$t->run();
echo '<hr>';

/* 
	__callStatic():
 */
class A
{
	
}
// A::say(); Uncaught Error: Call to undefined method A::say() in E:\xampp\htdocs\php190\lesson26\demo1.php:41 Stack trace: #0 {main} thrown in E:\xampp\htdocs\php190\lesson26\demo1.php on line 41


class B
{
	public static function __callStatic($name, $arr)//要求 __callStatic必须是静态的
	{
		echo $name, '的静态方法没有，小伙子，找错了~<br>';
	}
	
	private static function say1()
	{
		echo '123';
	}
}
B::say();//不存在
B::say1();//不可见












