<?php
/* 
	静态方法内部不能用$this,而是用self::
	self指类自己，而不是对象
	$this指对象
 */
class Test
{
	public static $a = 1;
	public $b;
	
	/* 
		静态方法内不允许存在$this,也就是说，不允许调用非静态的属性
	*/
	public static function say()
	{
		echo self::$a;
		// echo self::$b;
	}
	
	public function run()
	{
		
	}
}
Test::$a = 1;
Test::say();

$t = new Test();
var_dump($t);//只有b，没有a,a属于类，而不属于具体的对象
echo '<hr>';

/* 
	静态属性和方法可以继承
 */
class T extends Test
{
	
}
echo T::$a;
T::say();