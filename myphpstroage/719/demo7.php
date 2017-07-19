<?php
/* 
	克隆的魔术方法
	__clone()
	什么时候生效？克隆的时候自动生效
 */
class Test
{
	public $a = 1;
	public $b = 2;
	
	
	public function __clone()
	{
		$this->a = '敢克隆我的？';
		unset($this->b);
		$this->c = '呵呵，我会告诉你我没C么？';
	}
}
$t1 = new Test();
var_dump($t1);
echo '<br>';
$t11 = clone $t1;
var_dump($t11);
echo '<hr>';

/* 
	思考：如果属性的值也是一个对象，clone的时候怎么搞？默认浅克隆
 */
class A
{
	public $a; 
}

class B
{
	public $b;
}
$b = new B();
$b->b = new A();//对应的对象标识符是3，4
var_dump($b);
echo '<br>';
$bb = clone $b;//对应的标识符是：5，4,这就是浅克隆，也就是说：只改变外层的对象标识符，内层的不变
var_dump($bb);
echo '<hr>';

/* 
	如何深克隆，纯属扩展
 */
class C
{
	public $c;
}

class D
{
	public $d;
	
	public function __clone()
	{
		$this->d = clone $this->d;
	}
}
$d = new D();
$d->d = new C();
var_dump($d);
echo '<br>';
$e = clone $d;
var_dump($e);