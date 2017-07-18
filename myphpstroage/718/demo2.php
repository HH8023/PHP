<?php
/*
	重载：
	注意：所有重载的方法必须得是public修饰
	__set()
	__get()
	__isset()
	__unset()
*/
class Hero
{
	protected $name;//名
	protected $type;//类型，定位
	private $power;//力量
	private $money;//钱
	
	public function __construct($name,$type,$power,$money)
	{
		$this->name=$name;
		$this->type=$type;
		$this->power=$power;
		$this->money=$money;
	}
	
	public function say()
	{
		echo $this->name,'的口号是：人在塔在<br>';
	}
	//重载的时候需要传属性名，此处的XX就是个形参，所以允许出现$this—>$xx的情况
	public function __get($xx)
	{
		echo '__get方法被调用****';
		if(isset($this->$xx)){
			echo $this->$xx,'<br>';
		}else{
			echo '兄弟，你要的',$xx,'不存在<br>';
		}
	}
}

$deMa = new Hero('德玛西亚', '坦克', '草丛', '3150');
$deMa->say();
//echo $deMa->name;报错，此时在类外调用保护的name，符合重载的规则，所以会调用重载方法
$deMa->name;//调用的时候，因为有重载方法，所以可以直接用，而不需要$deMa->__get('xxx').这个六low了；
$deMa->xifu;
$deMa->money;//private,同样也会调用__get()

//所有后续新增的属性，都是public的
$deMa->daZhao = '转死你~';//public
echo $deMa->daZhao;//不会调用__get()
var_dump($deMa);

