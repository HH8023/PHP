<?php
/* 
	instanceof:检测对象是否属于某个类
 */
class A
{
	
}

class B extends A
{
	
}

class C extends B
{
	
}
$c = new C();
/* 
	如果属于子类，肯定属于父类
 */
var_dump($c instanceof C);//true
var_dump($c instanceof B);//true
var_dump($c instanceof A);//true
echo '<hr>';
/* 
	如果属于父类，一定不属于子类
 */
$a = new A();
var_dump($a instanceof A);//true
var_dump($a instanceof B);//false
var_dump($a instanceof c);//false



