<?php
/* 
	克隆：目的,复制对象，但是对象之间没有关系
	常规的引用赋值，直接赋值，不管用，这个在第一天就说过了。复制的是都是对象标识符，结果
	都是一个对象
 */
class Test
{
	
}
$t1 = new Test();
$t2 = $t1;//直接赋值
var_dump($t1);
echo '<br>';
var_dump($t2);
echo '<br>';
$t3 = &$t1;//引用赋值
var_dump($t3);
//t1,t2,t3是同一个对象，因为标识符一样
echo '<hr>';


/* 
	如何克隆，使用关键词clone
 */
$t4 = clone $t1;
var_dump($t4);
echo '<hr>';
/* 
	有人会说，这和New有什么区别？来，哥哥给你show一把
 */

class T
{
	public $a = 1;
	public $b = 2;
}
$t1 = new T();
$t1->a = 'a';
$t1->b = 'b';
$t1->c = 'c';
$t11 = clone $t1;//此时，t1,t11的属性的值是一致的
var_dump($t1);
echo '<br>';
var_dump($t11);
echo '<br>';
$t11->a = 111;
var_dump($t11);
echo '<br>';
var_dump($t1);

echo '<hr>';
// new一个看看
$t2 = new T();
var_dump($t2);//初始化的值
echo '<hr>';

