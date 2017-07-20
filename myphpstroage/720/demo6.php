<?php
/* 
	剩余的魔术方法：
	
 */
// __toString():将对象当初字符串输出自动调用
class A
{
	
}
$a = new A;
// echo $a; //Catchable fatal error: Object of class A could not be converted to string in E:\xampp\htdocs\php190\lesson26\demo6.php on line 12

class AA
{
	public function __toString()
	{
		return '你缺心眼啊，我是对象~';
	}
}
$aa = new AA();
echo $aa;
echo '<hr>';


