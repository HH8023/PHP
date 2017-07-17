<?php 
/*
	构造函数是否支持默认值：支持
	和函数一样，支持默认值，默认值的参数往后放
*/
class Test
{
	public $a;
	public $b;
	
	public function __construct($a,$b="b")
	{
		$this->a=$a;
		$this->b=$b;
	}
}
$t1 = new Test('a');
var_dump($t1);
$t2 = new Test(1,2);
var_dump($t2);