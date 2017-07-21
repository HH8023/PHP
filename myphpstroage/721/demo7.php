<?php
/*
	oop中常见的函数
*/
class Test
{
	public $a;
	private $b;
	protected $c;
	public function __construct()
	{
		
	}
	public function a()
	{
		
	}
	public function b()
	{
		
	}
	private function d()
	{
		
	}
	public function get()
	{
		echo get_class();//不传对象名，就得放在类内
	}
}
var_dump(get_class_methods('Test'));
echo '<hr>';

//get_class([可选对象名]);返回对象的类名
$t = new Test();
$t->get();
echo '<hr>';
echo get_class($t);