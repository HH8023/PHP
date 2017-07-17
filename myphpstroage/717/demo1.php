<?php 
/*
	类的声明：
	格式：
	class 类名
	{
		成员属性
		成员方法
	}
*/
class Say
{
	public $age = 18;//类中的变量，成员属性
	public function sayHello()//类中的函数，成员方法
	{
		echo '这是say的sayhello的方法';
	}
}
//类定义好之后，不能直接拿来用，需要进行实例化，实例化的结果就是对象，如何实例化一个对象：new
/*
	实例化一个类的方法1：
*/
$s = new Say();//推荐
var_dump($s);
echo '<hr>';

//方法2：
$ss = new Say();
var_dump($ss);
echo '<hr>';

//如何通过对象来用类中的属性和方法
//sayHello();//不能这么用
//echo $age;

/*
	正确的打开方法：
	他通过对象去玩对象和属性，方法之间有个指向关系，对象->属性|方法()
*/ 
echo $s->age, '<br>';
$s->sayHello();

















