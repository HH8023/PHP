<?php 
/*
	封装之后，进行了限制，访问该如何进行？
*/
class People
{
	public $name;
	protected $sex;
	private $age;
	
	public function __construct($name,$sex,$age)
	{
		$this->name = $name;
		$this->sex = $sex;
		$this->age = $age;
	}
	
	/*
		想在类外调用私有，保护的属性如何使用，可以使用public
	*/
	public function getSex()
	{
		echo $this->name,'的sex是：',$this->sex,'<br>';
	}
	public function getAge()
	{
		echo $this->name,'的age是：',$this->age,'<br>';
	}
	public function setSex($sex)
	{
		$this->sex=$sex;
	}
	public function unSex()
	{
		unset($this->sex);
	}
	public function isAge()
	{
		var_dump(isset($this->age));
	}	
}
$p = new People('张三','女',19);
var_dump($p);
echo '<hr>';
//echo $p->sex;//报错

//对限制的属性进行值的获取，可以通过第三个公告的方法来完成
$p->getSex();
$p->getAge();

//对限制的属性进行值的设置，同样也是通过三方的公共方法来完成
//$p->sex = '男';//报错
//$p->age = '22';//报错
$p->setSex('男');
//$p->getSex();
var_dump($p);
echo '<hr>';

//对公共属性的销毁，直接销毁
unset($p->name);
var_dump($p);
echo '<br>';
//unset($p->sex);

//对受限制的属性进行销毁，需要额外的方法
$p->unSex();
var_dump($p);
echo '<hr>';

//对公共属性的检测，直接检测

var_dump(isset($p->name));//false，因为上面销毁了
var_dump(isset($p->age));//false,实际存在，只不过不让访问

//借助三方方法
$p->isAge();//true

/*
	如果是限制的属性和方法，都需要三方方法来搞定的话，还不如不限制呢，如果非要限制，太累了，因为需要4N个对应的方法，有没有好的办法，魔术方法
	__set()
	__get()
	__isset()
	__unset()
	自动检测，如果是受限制，走这4个方法，如果不是，不管
*/


















