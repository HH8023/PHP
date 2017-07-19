<?php
/* 
	类常量：类内部的常量，如何定义？ const 常量名 =  '常量值'
	普通常量是define()
 */
define('PI', '3.14');
echo PI;
echo '<hr>';

class Test
{
	const TEST = '这是一个test字符串';
	// const TEST = '这是一个test字符串123';报错，同一个类中不能定义重名的常量
	
	public function say()
	{
		echo '类内有个常量TEST，值是：', self::TEST;
	}
}
/* 
	怎么调用类中的常量
 */
/* 
	类外
 */
echo Test::TEST;//推荐的方式
$t = new Test();
echo $t::TEST;//可以，麻烦
echo '<hr>';


/* 
	类内
 */
$t->say();