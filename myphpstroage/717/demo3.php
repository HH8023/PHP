<?php 
/*
	$this 是指具体的对象，哪个对象调用，就是哪个对象
*/
class Person
{
	public $name;//可以不赋值，后续赋值
	public $age;
	public $sex;
	
	public function say()
	{
		echo $this->name,'在说话';
	}
	
	public function run()
	{
		echo $this->name,'在跑步';
	}
}
$per1 = new Person();
var_dump($per1);
$per1->name = '张三';
$per1->age=19;
$per1->sex = '男';
echo '<hr>';
var_dump($per1);
echo '<hr>';
echo $per1->name;
echo $per1->age;
echo $per1->sex;
echo $per1->say();
echo $per1->run();
echo '<hr>';

$per2 = new Person();
var_dump($per2);
$per2->name = '李四';
$per2->age = '20';
$per2->sex = '女';
echo '<br>';
var_dump($per2);
echo $per2->name;
$per2->say();
$per2->run();


