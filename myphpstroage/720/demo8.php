<?php
/* 
	__debugInfo():var_dump()对象的时候自动调用
 */
class A
{
	public $a;
	public $b;
	public $c;
}
$a = new A();
var_dump($a);
echo '<hr>';


class AA
{
	public $a;
	public $b;
	public $c;
	
	public function __debugInfo()
	{
		//必须返回数组
		return ['你大爷', '你大妈', '你二大爷'];//这个数组中的值，打印的时候会作为对象的属性，可以遮盖属性，不让看
	}
}
$aa = new AA();
var_dump($aa);










