<?php 
/*
	访问修饰
	protected:子类中可用父类的
	private : 不可用
*/
class Test
{
	protected $a;
	private $b;
	
	public function __construct($a,$b)
	{
		$this->a = $a;
		$this->b = $b;
	}
}
class T extends Test
{
	public function __get($name)
	{
		if (isset($this->$name)) {
			echo $this->$name;
		}else {
			echo $this->$name,'不存在';
		}
	}
}
$t = new T(1,2);
var_dump($t);
echo '<hr>';
echo $t->a;//1
echo $t->b;//报错，说b没有定义，因为var_dump，注意b的修饰是私有的

/*
	也就是说，子类继承父类的时候，私有的方法或属性都能拿到，只不过不让用而已
*/












