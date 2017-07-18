<?php 
/*
	重载,整体来一套
*/
class Hero
{
	public $name;
	protected $type;
	protected $power;
	protected $money;
	private $daZhao;
	private $cd;
	
	public function __construct($name,$type,$power,$money,$daZhao,$cd)
	{
		$this->name = $name;
		$this->type = $type;
		$this->power = $power;
		$this->money = $money;
		$this->daZhao = $daZhao;
		$this->cd = $cd;
	}
	
	public function __set($name,$value)
	{
		echo 'set方法被调用**';
		$this->$name = $value;
		echo $this->$name,'赋值成功<br>';
	}
	
	public function __get($name)
	{
		echo 'get方法被调用**';
		if (isset($this->$name)){
			echo $this->$name;
		}else{
			echo $this->$name,'不存在<br>';
		}
	}
	
	public function __isset($name)
	{
		echo 'isset方法被调用**';
		if(isset($this->$name)){
			echo $this->$name,'存在';
		}else{
			echo $this->$name,'不存在';
		}
	}
	
	public function __unset($name)
	{
		echo 'unset方法被调用';
		unset($this->$name);
	}	
}
$teMo = new Hero('提莫', '法师', '蘑菇', '6300', '种蘑菇', '13s');
var_dump($teMo);
echo '<hr>';
$teMo->name = '提莫队长';//set没调用
$teMo->money = '12000';//set调用了
$teMo->money;//get被调用
echo '<br>';
isset($teMo->money);
echo '<br>';
var_dump($teMo);
echo '<br>';
unset($teMo->cd);
echo '<br>';
var_dump($teMo);
