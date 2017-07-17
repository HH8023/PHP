<?php 
/*
	构造函数：是一个函数，
	作用：实例化对象时，第一个自动调用的函数，不需要手动调用
	通常用来做初始化对象的赋值
	格式：
		public function __construct()
		{
			初始化信息
		}
*/
class Person
{
	public $name;
	public $age;
	public $sex;
	
	public function say()
	{
		echo $this->name,'在说话';
	}	
}

/*
	传统方法
*/
//$p1 = new Person();
//$p1->name='xx';
//$p1->age='xx';
//$p1->sex='xx';

//使用构造函数的方法
class Human
{
	public $name;
	public $age;
	public $sex;
	
	public function __construct($name,$age,$sex)
	{
		$this->name=$name;
		$this->age=$age;
		$this->sex=$sex;
	}
	
	public function say()
	{
		echo $this->name,'在说话';
	}
}
$hu1 = new Human('王五',20,'不详');
var_dump($hu1);
$hu1->say();
echo '<hr>';

$hu2 = new Human('马勇',29,'女');
var_dump($hu2);
$hu2->say();
