<?php
/* 
	多接口的实现
	对与类来说，是单继承
	使用接口之后，可以一次性实现多接口
 */
interface A
{
	function say($a);
}

interface B
{
	function run($a);
}

class T{
	public function fly()
	{
		echo 'I can fly<br>';
	}
}
/* 
	一个类，同时继承了T，实现了接口A，B
 */
class Test extends T implements A,B
{
	public function say($a=1)
	{
		echo '这是实现a接口的say方法<br>';
	}
	
	public function run($a=1)
	{
		echo '这是实现b接口的run方法<br>';
	}
}
$t = new Test();
$t->say();
$t->run();
$t->fly();
echo '<hr>';

/* 
	接口常理和类常量一致
	接口中不能有属性
 */
interface C
{
	const C = '这是C的常量';
	// public $a;
}
class C1 implements C
{
	
}
echo C1::C;




















