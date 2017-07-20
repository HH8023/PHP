<?php
/* 
	接口：
	定义：interface
 */
/* 
	1.接口定义，接口不能实例化
 */
interface Test
{
	
}
// $t = new Test();


/* 
	2.接口中的方法必须是公共的,接口中的方法可以指定为public或者压根不写
 */
interface A
{
	// protected function say();
	// private function run();
	 public function say();
	 function run();
}

/* 
	3.接口中不能有普通方法，都是抽象方法，这一点和抽象类有区别
 */
interface 	B
{
	// public function sayB()
	// {
		// echo 123;
	// }
}
/* 
	接口的实现-implements
 */
class A1 implements A
{
	public function say()
	{
		
	}
	
	/* 
		实现接口的方法，也是重写，接口中的方法都是公共的，所以修饰也得是public
	*/
	protected function run()
	{
		
	}
}











