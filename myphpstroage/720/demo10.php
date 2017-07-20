<?php
/* 
	抽象类，abstract
 */
abstract class A
{
	
}
/* 
	1.抽象类不能被实例化，只能子类继承
 */
// $a = new A();

/* 
	2.抽象方法必须得在抽象类中
 */
// class B
// {
	// /* 
		// 抽象方法不能有函数体
	// */
	// public abstract function say();
	// // {
	// // }
// }


/* 
	3.抽象类中允许普通方法存在
 */
abstract class C
{
	public function say()
	{
		
	}
}


/* 
	4.抽象类只能通过继承来实现
 */
abstract class D
{
	public function say()
	{
		echo '这是D类中的say方法';
	}
}

class Dd extends D
{
	
}
$dd = new Dd();
$dd->say();
echo '<hr>';


/* 
	5.抽象类中的抽象方法必须都得实现，否则报错
 */
abstract class E
{
	public abstract function say();
	protected abstract function run();
}

class E1 extends E
{
	protected  function say()
	{
		echo '这是E1的say方法';
	}
	protected  function run()
	{
		echo 'asjdlkf';
	}
}












