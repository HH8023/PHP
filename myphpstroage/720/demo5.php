<?php
/* 
	序列化的魔术方法：
	__sleep():serialize的时候自动调用
	__wakeup()：unserialize的时候自动调用
 */
class Test
{
	public $a = 1;
	private $b = 2;
	protected $c = 3;
	
	/* 
		序列化的时候自动调用，可以用来清理属性或者调整属性
	*/
	public function __sleep()
	{
		$this->a = 'a';//调整
		$this->d = '这是一个D';
		/* 
			注意：sleep必须返回一个数组，而且数组中只能是对象有的属性，并且是以属性名的方法返回
		*/
		return ['a','b','d','f'];//此处没有f，会报错
	}
	
	/* 
		反序列化自动调用
	*/
	public function __wakeup()
	{
		/* 
			醒来同样可以做值的调整
		*/
		unset($this->a);
		$this->c = '臭不要脸';
		$this->f = '哈哈，这是醒来给你搞的';
	}
}
$t = new Test();
$str = serialize($t);
echo $str;
echo '<hr>';


$obj = unserialize($str);
var_dump($obj);






