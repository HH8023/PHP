<?php
/* 
	__invoke():把对象当函数使用，自动调用
 */
class A
{
	
}
$a = new A();
// $a();//致命错误

/* 
	__invoke()
*/
class AA
{
	public function __invoke()
	{
		echo '小伙子，你玩儿的是对象，不是函数';
	}
}
$aa = new AA();
$aa();