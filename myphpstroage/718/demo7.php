<?php
/* 
	重写：子类继承到的父类的方法并不合适，所以需要修改。这个修改
	可以认为是覆盖，也就是重写
 */
// 比如：鸟都有翅膀，大部分都会飞，但是鸵鸟不会飞
class Bird
{
	public $name;
	public $wings;
	
	public function __construct($name, $wings=2)
	{
		$this->name = $name;
		$this->wings = $wings;
	}
	
	public function fly()
	{
		echo $this->name, '可以飞，用', $this->wings, '个翅膀<hr>';
	}
}

class MaQue extends Bird
{
}
$mq = new MaQue('麻雀');
$mq->fly();
/* 
	重写的要求：
	1.修饰必须一致或者更大的范围
 */
class TuoNiao extends Bird
{
	//鸵鸟不能飞，所以需要重写fly()方法
	protected function fly()//对继承到的方法进行的修改就是重写|覆盖
	{
		echo $this->name, '不能飞，用', $this->wings, '个翅膀，跳跃。';
	}
}
$tn = new TuoNiao('鸵鸟');
// $tn->fly();



















