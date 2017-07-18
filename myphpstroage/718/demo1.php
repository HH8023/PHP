<?php 
class Person
{
	public $name;
	protected $age;
	private $sex;
	
	public function __construct($name,$age,$sex)
	{
		echo '构造方法被调用<br>';
		$this->name=$name;
		$this->age = $age;
		$this->sex = $sex;
	}
	public function __destruct()
	{
		echo '析构方法被调用<br>';
	}
	public function say()
	{
		echo '名字是：',$this->name,'，年龄是：',$this->age,'，性别是：',$this->sex,'<br>';
	}
	public function getAge()
	{
		echo $this->age;
	}
}
$zhangsan = new Person('张三',10,'男');
$zhangsan->say();
$zhangsan->getAge();






