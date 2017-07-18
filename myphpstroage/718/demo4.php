<?php 
/* 
	继承：如果多个类中有同样的属性和方法，那么就完全可以把这些公有的属性和方法抽出来，单独当成一个类，
	其他的类，继承这个类，这样可以少写代码。这就是继承
	注意：php是单继承
*/

class People
{
	public $name;
	protected $age;
	private $sex;
	
	public function __construct($name,$age,$sex)
	{
		$this->name=$name;
		$this->age=$age;
		$this->sex=$sex;
	}
	public function say()
	{
		echo $this->name,'会说话';
	}	
}
//定义子类，继承关键词extends
class Student extends People
{
	
}
// $zhangsan = new Student();//此时没有构造函数，子类如果没有构造函数，就会自动调用父类的构造函数，如果有，就调用自己的

$zhangsan = new Student('张安', '19', '男');
var_dump($zhangsan);
$zhangsan->say();
echo '<br>';

//定义子类2
class Teacher extends People
{
	
}
$lisi = new Teacher('李四', 20, '女');
var_dump($lisi);
$lisi->say();
echo '<br>';
