<?php 
/*
	引用赋值和直接赋值在面向对象中的使用
*/
class Test
{
	public $a = 1;
	public $b = 2;	
}
$t1 = new Test();
$t2 = new Test();
var_dump($t1);
var_dump($t2);
echo '<hr>';

/*
	直接赋值，t1,t3是否是同一个对象
*/
$t3 = $t1;
var_dump($t3);//#1,t1,t3是同一个对象
echo '<hr>';

/*
	对t1的a进行修改，会不会影响到t3
*/
$t1->a = 'a哈哈';
echo $t1->a,'<br>';
echo $t3->a,'<hr>';

/*
	引用赋值,t2.t4是否是同一个对象
*/
$t4 = &$t2;
var_dump($t4);//是的
echo '<hr>';
echo $t2->a;//1
echo $t4->a;//1
echo '<hr>';
$t4->b = 'b';
echo $t2->b;//b


