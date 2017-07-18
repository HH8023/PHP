<?php 
/*
	父类子类构造都有，优先调用子类的构造
*/
class Test
{
	public $a;
	protected $b;
	private $c;
	
	public function __construct()
	{
		echo '父类构造方法被调用';
	}
}
/*
	如果子类有构造方法，优先调用自己的构造
*/
class T extends Test
{
	public function __construct()
	{
		echo '子类构造方法被调用';
	}
}
$t = new T();
var_dump($t);
echo '<hr>';

/*
	父类子类都有构造，子类调用父类的方法
	parent::__construct(实参1，实参2，实参N)
*/
class A
{
	private $a;
	private $b;
	
	public function __construct($a,$b)
	{
		echo '父类构造';
		$this->a = $b;
		$this->b = $b;
	}
}

class AA extends A
{
	private $c;
	
	public function __construct($a,$b,$c)
	{
		//$this->a = $a;
		//可以使用父类的构造，进行代码的重用
		parent::__construct($a,$b);
		echo '子类构造';
		$this->c = $c;
	}
}
$aa = new AA(1,2,3);
var_dump($aa);
